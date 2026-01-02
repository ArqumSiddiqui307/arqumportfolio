@extends('layout.apptheme')
@section('content')

<div class="ranx_container"> 
    <section class="page_header_section">
        <nav class="breadcrumb_center">
            <a href="{{ url('/') }}">Home</a> <span>→</span> <span>About</span>
        </nav>
        <h1 class="page_title_center">About <span>Me.</span></h1>
        
        <p class="intro_summary">
            Results-driven Senior Backend Developer with extensive experience in designing,
            developing, and maintaining scalable backend systems using **Laravel** and **PHP**. 
            Proven track record of building ERP systems, RESTful APIs, and high-performance 
            database solutions for diverse industries.
        </p>
    </section>

    <div class="content_sections_wrapper">

        <div class="section_card objective_card">
            <div class="section_title">Objective</div>
            <div class="section_text">
                <p>
                    To be an active employee in your company and utilize my versatile skills.
                    I aim to leverage knowledge of **Software Engineering** to uplift the organization
                    through hard work, loyalty, and collaboration, delivering the best results.
                </p>
            </div>
        </div>
        
        <div class="section_card">
            <div class="section_title">Technical Expertise</div>
            <div class="skills_wrapper">
                {{-- Content from Skills section --}}
                <div class="skill_tile">
                    <i class="fa-brands fa-laravel"></i>
                    <h3>Laravel / PHP</h3>
                    <p>Backend architecture, RESTful APIs & clean code structure.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-solid fa-database"></i>
                    <h3>MySQL / PostgreSQL</h3>
                    <p>Database design, indexing, and performance optimization.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-solid fa-network-wired"></i>
                    <h3>REST API Integration</h3>
                    <p>Secure API development & integration with third-party systems.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-brands fa-git-alt"></i>
                    <h3>Git / GitHub</h3>
                    <p>Version control, branching, and collaborative workflow.</p>
                </div>
            </div>
        </div>

        <div class="section_card">
            <div class="section_title">Professional Experience</div>
            <div class="experience_wrapper">
                
                {{-- Experience cards from CV (Jan 2025 – Present) --}}
                <div class="exp_card">
                    <div class="exp_time">Jan 2025 – Present</div>
                    <h3>Senior Backend Developer | FameWheels</h3>
                    <span>Full-time | On-site</span>
                    <ul>
                        <li>Architect and maintain Laravel-based backend systems, ensuring scalability, performance, and security.</li>
                        <li>Design and optimize MySQL & PostgreSQL databases, including query tuning and indexing for high-traffic workloads.</li>
                        <li>Develop secure RESTful APIs to support mobile and web applications.</li>
                        <li>Collaborate with product, frontend, and QA teams to deliver features on time.</li>
                    </ul>
                </div>

                {{-- Experience cards from CV (Sep 2024 – Dec 2024) --}}
                <div class="exp_card">
                    <div class="exp_time">Sep 2024 – Dec 2024</div>
                    <h3>Back End Developer | MetaStrom</h3>
                    <span>Full-time | On-site</span>
                    <ul>
                        <li>Engineered high-performance APIs and backend services with Laravel and PHP.</li>
                        <li>Automated repetitive backend workflows, improving delivery speed by 20%.</li>
                        <li>Created unit and integration tests to maintain code quality and prevent regressions.</li>
                        <li>Worked with frontend teams to ensure seamless API integration and smooth UX.</li>
                        <li>Monitored application performance and optimized server-side logic.</li>
                    </ul>
                </div>
                
                {{-- Experience cards from CV (Jun 2024 – Sep 2024) --}}
                <div class="exp_card">
                    <div class="exp_time">Jun 2024 – Sep 2024</div>
                    <h3>Back End Developer | Webnet Pakistan Pvt Ltd</h3>
                    <span>Full-time | On-site</span>
                    <ul>
                        <li>Developed and maintained scalable backend systems using Laravel.</li>
                        <li>Designed efficient MySQL schemas and optimized SQL queries for faster data retrieval.</li>
                        <li>Integrated third-party APIs for enhanced functionality.</li>
                        <li>Collaborated with frontend developers for API compatibility.</li>
                        <li>Reduced production downtime by 30%.</li>
                    </ul>
                </div>

                {{-- Experience cards from CV (Apr 2021 – Jun 2024) --}}
                <div class="exp_card">
                    <div class="exp_time">Apr 2021 – Jun 2024</div>
                    <h3>Software Developer | Amros Pharmaceuticals</h3>
                    <span>Full-time | On-site</span>
                    <ul>
                        <li>Led development of ERP system (Pharmeaze).</li>
                        <li>Implemented REMS for pharmaceutical compliance.</li>
                        <li>Enhanced data management for faster decision-making.</li>
                        <li>Worked with cross-functional teams for software delivery.</li>
                    </ul>
                </div>

                {{-- Experience cards from CV (2019 – 2021) --}}
                <div class="exp_card">
                    <div class="exp_time">2019 – 2021</div>
                    <h3>Web Developer Level 3 | BOS</h3>
                    <span>Full-time | On-site</span>
                    <ul>
                        <li>Developed web portals using Laravel, PHP, and JS.</li>
                        <li>Maintained live portals and improved performance.</li>
                        <li>Ensured responsive and user-friendly design.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
/* --- Theme Variables (Included for context) --- */
:root {
    --bg-dark: #0a0a0a;
    --text-light: #e6e6e6;
    --accent: #b8ff48; /* Bright Green Accent */
    --muted: #999;
    --card-bg: #161616;
}

/* --- New Global Container and Text Styles to match the layout's theme --- */
.ranx_container {
    max-width: 1100px;
    margin: 50px auto;
    padding: 0 20px;
}

/* --- 1. PAGE HEADER (TITLE & BREADCRUMB) --- */
.page_header_section {
    text-align: center;
    margin-bottom: 60px;
}
.breadcrumb_center {
    display: inline-flex;
    background: rgba(255, 255, 255, 0.05);
    padding: 8px 15px;
    border-radius: 50px;
    font-size: 0.9rem;
    color: var(--muted);
    margin-bottom: 25px;
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    user-select: none;
}
.breadcrumb_center a {
    color: var(--text-light);
    text-decoration: none;
    font-weight: 500;
}
.breadcrumb_center span {
    margin: 0 6px;
    color: var(--muted);
}
.page_title_center {
    font-size: 4rem;
    font-weight: 900;
    color: var(--text-light);
    margin: 0;
}
.page_title_center span {
    color: var(--accent);
}

/* --- Introductory Summary --- */
.intro_summary {
    max-width: 700px;
    margin: 25px auto 0;
    font-size: 1.1rem;
    color: var(--muted);
    line-height: 1.6;
}
.intro_summary strong {
    color: var(--accent);
}

.content_sections_wrapper {
    padding-top: 20px;
}

/* --- Base Section Card Styles --- */
.section_card {
    background: var(--card-bg);
    color: var(--text-light);
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3); 
    border: 1px solid rgba(255,255,255,0.08);
}
.section_title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: var(--accent);
    border-bottom: 2px solid rgba(184, 255, 72, 0.2);
    padding-bottom: 8px;
}
.section_text p {
    font-size: 16px;
    color: var(--text-light);
    line-height: 1.7;
}
.section_text p strong {
    color: var(--accent);
    font-weight: 600;
}

/* --- Skills Section Styles --- */
.skills_wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}
.skill_tile {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    transition: 0.3s ease;
    border: 1px solid rgba(184, 255, 72, 0.2);
}
.skill_tile:hover {
    background: #252525;
    transform: translateY(-4px);
    box-shadow: 0 8px 15px rgba(184, 255, 72, 0.15);
}
.skill_tile i {
    font-size: 40px;
    color: var(--accent); 
    margin-bottom: 15px;
}
.skill_tile h3 {
    color: var(--text-light);
    margin-bottom: 10px;
    font-weight: 600;
    font-size: 18px;
}
.skill_tile p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.4;
    margin: 0;
}

/* --- Experience Section Styles (UPDATED BULLET POINT CSS) --- */
.experience_wrapper {
    display: flex;
    flex-direction: column;
    gap: 25px;
}
.exp_card {
    background: #1e1e1e;
    padding: 25px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    transition: all 0.3s ease;
}
.exp_card:hover {
    background: #252525;
    box-shadow: 0 4px 10px rgba(184, 255, 72, 0.1);
}
.exp_time {
    color: var(--accent);
    font-weight: 700;
    font-size: 14px;
    margin-bottom: 8px;
}
.exp_card h3 {
    color: var(--text-light);
    margin-bottom: 5px;
    font-size: 20px;
    font-weight: 700;
}
.exp_card span {
    color: var(--muted);
    font-size: 14px;
    display: block;
    margin-bottom: 15px;
}
.exp_card ul {
    margin: 0;
    padding-left: 22px;
    color: var(--muted);
    font-size: 15px;
    list-style-type: none;
}
.exp_card ul li {
    margin-bottom: 8px;
    line-height: 1.6;
    position: relative;
    padding-left: 20px;
}
/* This is the key change: Rocket replaced with Checkmark */
.exp_card ul li::before {
    content: '\f00c'; /* Unicode for solid checkmark */
    font-family: "Font Awesome 6 Free"; /* Use the imported FA font */
    font-weight: 900; /* For solid style */
    color: var(--accent); 
    position: absolute;
    left: 0;
    top: 0;
    font-size: 14px;
}

/* --- Responsive Adjustments --- */
@media (max-width: 768px) {
    .ranx_container {
        margin-top: 20px;
    }
    .page_title_center {
        font-size: 3rem;
    }
    .intro_summary {
        font-size: 1rem;
    }
    .section_card {
        padding: 20px;
    }
    .skills_wrapper {
        grid-template-columns: 1fr;
    }
    .skill_tile {
        padding: 20px;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

@endsection