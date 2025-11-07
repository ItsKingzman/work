# WordPress Build Template

> Modular site framework for WordPress builds using **Kinsta**, **Blocksy Pro**, **Elementor Pro**, **ACF Pro**, **Fluent Forms**, and **Perfmatters**.

---

## 🧩 Stack Overview

| Tool | Purpose |
|------|----------|
| **Kinsta Hosting** | Managed WP hosting with CDN + Edge Caching |
| **Blocksy Pro (Business)** | Core theme framework |
| **Elementor Pro** | Visual builder for custom layouts |
| **ACF Pro** | Custom fields and data modeling |
| **Perfmatters** | Performance & optimization settings |
| **Fluent Forms Pro** | Lightweight form handling |
| **Stripe / Square** | Payment integration (optional) |

---

## ⚙️ Configuration

All exportable data and optimization settings live in `/config/`:

- [WordPress XML Export](config/itaca.WordPress.2025-11-07.xml)
- [Perfmatters Settings JSON](config/perfmatters-settings-export-2025-11-07.json)

You can replace these files with new exports per client or environment.

---

## 🧠 Development

**Functions.php Snippets**
- GTM + GA4 integration
- Custom CPT or ACF hooks
- Perfmatters script exclusions

**Style.css**
- Child theme overrides
- Minimal and modular — syncs with Blocksy customizer

---

## 🧰 Workflow

1. **Clone or fork** this repo for each client build  
2. **Import config** files (`/config/`) into WordPress  
3. **Sync theme + plugin settings**  
4. Commit changes to `/functions.php` or `/style.css` as needed  

---

## 🧾 License

Internal use – © The Hive / Conner King  
Not for public redistribution or resale.

---

