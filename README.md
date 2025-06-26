# 🧬 GeneScope: Laravel App for Gene Expression Visualization

Welcome to **GeneScope**, a lightweight bioinformatics dashboard built with **Laravel**. This project visualizes and manages gene expression data (e.g., GSE2034 dataset) using structured database migration and a clean web interface. Designed for experimentation, exploration, and extensibility — especially for developers stepping into **computational biology**.

> 🔍 "From JSON to insight — one gene at a time."

---

## 🚀 What This Project Does

- ✅ Parses and transforms **GEO gene expression datasets** (like `GSE2034_series_matrix`) into JSON
- ✅ Migrates expression and gene metadata into **MariaDB**
- ✅ Displays gene expression metrics via Laravel Blade views
- ✅ Uses SQL aggregates to calculate **expression count** and **average values**
- ✅ Built with scalability in mind: easy to plug in charts, filters, and future APIs

---

## 🧪 Tech Stack

- **Backend:** Laravel 11, PHP 8.x, MySQL / MariaDB
- **Frontend:** Bootstrap 5, Blade Templating
- **Data Source:** GEO Dataset (`GSE2034`)
- **Processing Tool:** Jupyter (Pandas, NumPy, Seaborn/Matplotlib)
- **Format:** JSON > Migration > SQL Query > View

---

## 📈 Current Features

- View top 20 genes with expression count and average
- Dashboard-ready UI with expandable layout
- Clean data abstraction for genes, expressions, and samples
- Dynamic aggregation with `withCount()` and `withAvg()` for performance

---

## 💡 Why I Built This

Coming from a **web dev + computer vision background**, I wanted to break into **computational biology**. This project is my learning vessel: combining Laravel skills with real biological data. If you're on a similar path — welcome aboard.

---

## 🔧 How to Run Locally

```bash
git clone https://gitlab.com/persona-it/dparagon-new.git
cd dparagon-new

# Install dependencies
composer install

# Set up .env and DB
cp .env.example .env
php artisan key:generate

# Configure database in .env
php artisan migrate --seed

# Serve
php artisan serve
```

🧬 Sample Data Format

Example JSON:

```bash
[
    {
        "probe_id": "1007_s_at",
        "value": 5.23,
        "sample_id": "GSM123456"
    }
]
```

🌱 Future Roadmap

    🔬 Add PCA clustering visualization

    📊 Integrate Chart.js / D3.js for dynamic graphs

    🔍 Add gene/sample search and filter

    🧬 Export data as CSV or JSON from frontend

    📡 Build REST API for external apps

🤝 Contributions

This project is personal — but feedback and collaboration are welcome. If you’re interested in bioinformatics tools or Laravel in science, feel free to fork, ping, or open an issue.

🧠 Author Note

    "I started coding as a way to break out. Now I'm using code to peer into the building blocks of life."

📬 Contact

If you're working on computational biology, want to share ideas, or collaborate:

📧 fadhilazzhar@gmail.com
🐙 GitHub: https://github.com/chryote
