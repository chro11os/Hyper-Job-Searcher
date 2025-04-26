# ⚡ Ultra Fast & Accurate Job Searcher

**Built with 🦀 Rust (Custom Server) + 💻 Laravel + ⚛️ React + 🤖 JSearch API**

This isn't your average job app — it's a lightning-fast, AI-powered **job killer**. It scrapes, filters, matches, and even applies for you. Built for speed. Designed for relevance. Backed by a Rust-powered custom server and AI that actually understands what you're looking for.

---

## 🚀 Features

- ⚡ **Rust Server Backend** — Handles blazing-fast request processing & heavy lifting  
- 🔍 **JSearch API Integration** — Pulls real-time, relevant job listings  
- 🤖 **AI Auto Application** — Automatically applies to jobs using GPT-style intelligence  
- 📊 **Smart Job Matching** — Filters trash jobs, surfaces high-quality opportunities  
- 🎯 **Custom Filtering** — Keywords, roles, locations, salary range, remote-first  
- 🧠 **Semantic Search** — AI understands what kind of job you *actually* want

---

## 🛠️ Tech Stack

| Tech           | Role                       |
|----------------|----------------------------|
| 🦀 Rust         | Core server / job router   |
| Laravel        | API Gateway / Auth / DB    |
| React          | Frontend UI                |
| Tailwind CSS   | Frontend styling           |
| JSearch API    | Job data provider          |
| OpenAI / LLM   | AI job match + auto-apply  |

---

## ⚙️ Setup

### 1. Clone the Project

```bash
git clone https://github.com/yourusername/jobsearcher.git
cd jobsearcher
```

---

### 2. Rust Server

Make sure [Rust](https://www.rust-lang.org/tools/install) is installed.

```bash
cd rust-server
cargo run
```

> 🚀 This handles job routing, filtering, and AI request orchestration.

---

### 3. Laravel Backend

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

---

### 4. React Frontend

```bash
cd frontend
npm install
npm run dev
```

---

### 5. API Keys

Set up your environment variables in `.env` files (Laravel & Rust):

```env
JSEARCH_API_KEY=your_jsearch_api_key
OPENAI_API_KEY=your_openai_key
```

---

## 🤯 Why This Exists

Because job hunting is outdated and broken.  
This project flips the script:

> Find jobs in seconds → AI reads + filters → Auto-applies → You chill.

---

## 🧪 Roadmap

- [ ] Resume keyword AI analyzer  
- [ ] Voice-command job search (via Web Speech API)  
- [ ] Multi-language support  
- [ ] Dashboard for tracking applications

---

## 👤 Author

**Neil Brags Guzman**  
🧠 20 y/o dev from 🇵🇭 Makati  
🎓 CS @ Mapúa University  
🛠️ Laravel + Rust + React + AI  
⚡ Aspiring full-stack 10x dev

---

## 📄 License

MIT — Fork it, build it, scale it, ship it.
```

Let me know if you want a matching `CONTRIBUTING.md` or docs template too.
