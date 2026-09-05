"""Verify the two public Japanese encephalitis price surfaces after deployment."""
from pathlib import Path
import html
import re
import sys

prices_page, service_page = (Path(path).read_text(encoding="utf-8") for path in sys.argv[1:])

def text(fragment):
    return " ".join(html.unescape(re.sub(r"<[^>]+>", " ", fragment)).split())

rows = []
for row in re.findall(r"<tr\b[^>]*>.*?</tr>", prices_page, re.S):
    cells = [text(cell) for cell in re.findall(r"<td\b[^>]*>(.*?)</td>", row, re.S)]
    if cells and cells[0] == "Japanese Encephalitis":
        rows.append(cells)
if len(rows) != 1 or len(rows[0]) != 4 or rows[0][1] != "£100":
    raise SystemExit("Expected exactly one Japanese encephalitis Prices row at £100 per dose")
if rows[0][2] not in ("", "—", "£200", "£200 (2 doses)"):
    raise SystemExit("Unexpected Japanese encephalitis course total")

hero_prices = re.findall(
    r'class="japaneseencephalitis-trust-card-amount"[^>]*>(.*?)</span>',
    service_page, re.S,
)
pricing_sections = re.findall(
    r'<section class="japaneseencephalitis-pricing-section"[^>]*>(.*?)</section>',
    service_page, re.S,
)
if len(hero_prices) != 1 or text(hero_prices[0]) != "£100" or len(pricing_sections) != 1:
    raise SystemExit("Expected Japanese encephalitis service hero price £100")
pricing_prices = re.findall(r'<span class="price"[^>]*>(.*?)</span>', pricing_sections[0], re.S)
pricing_units = re.findall(r'<span class="per"[^>]*>(.*?)</span>', pricing_sections[0], re.S)
if [text(value) for value in pricing_prices] != ["£100"]:
    raise SystemExit("Expected Japanese encephalitis service pricing card £100")
if [text(value) for value in pricing_units] != ["per dose"]:
    raise SystemExit("Japanese encephalitis price unit changed")
print("Verified Japanese encephalitis: Prices row, service hero and pricing card are £100 per dose.")
