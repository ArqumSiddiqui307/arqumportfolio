@extends('layout.apptheme')
@section('content')

<div class="ranx_container"> 
    
    <section class="page_header_section">
        <nav class="breadcrumb_center">
            <a href="{{ url('/') }}">Home</a> <span>→</span> <span>Skills</span>
        </nav>
        <h1 class="page_title_center">My <span>Expertise.</span></h1>
    </section>

    <div class="content_sections_wrapper">

        <div class="section_card intro_text_card">
            <div class="section_title">Backend Focus</div>
            <div class="section_text">
                <p>
                    As a <strong>Backend Developer</strong>, I focus on building scalable APIs, clean architecture, and high-performance systems using **Laravel** and **PHP** — blending logic with reliability and speed. My expertise lies in database optimization, robust security, and seamless API integration.
                </p>
            </div>
        </div>
        
        <div class="section_card skills_grid_card">
            <div class="section_title">Core Stack & Practices</div>
            <div class="skills_wrapper">
                
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

                <div class="skill_tile">
                    <i class="fa-solid fa-gears"></i>
                    <h3>Server & Performance</h3>
                    <p>Deployment, caching, and optimization for high-traffic systems.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-solid fa-vial"></i>
                    <h3>Testing & QA</h3>
                    <p>Unit testing & integration testing for robust applications.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-solid fa-code"></i>
                    <h3>JavaScript / jQuery</h3>
                    <p>Interactive features & lightweight frontend integration.</p>
                </div>
                <div class="skill_tile">
                    <i class="fa-solid fa-people-group"></i>
                    <h3>Team Collaboration</h3>
                    <p>Effective communication and agile teamwork for success.</p>
                </div>
                
            </div>
        </div>

        <div class="section_card milestones_card">
            <div class="section_title">Career Milestones</div>
            <div class="milestones_flex">
                <div class="milestone_tile">
                    <h2>6+</h2>
                    <span>Years Experience</span>
                </div>
                <div class="milestone_tile">
                    <h2>20+</h2>
                    <span>Web Projects</span>
                </div>
                <div class="milestone_tile">
                    <h2>5+</h2>
                    <span>Happy Clients</span>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
/* --- Theme Variables (Assuming apptheme defines these) --- */
:root {
    --bg-dark: #0a0a0a;
    --text-light: #e6e6e6;
    --accent: #b8ff48; /* Bright Green Accent */
    --muted: #999;
    --card-bg: #161616;
}

/* --- Global Container --- */
.ranx_container {
    max-width: 1100px;
    margin: 50px auto;
    padding: 0 20px;
}

/* --- 1. PAGE HEADER (Copied from About Page) --- */
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

.content_sections_wrapper {
    padding-top: 20px;
}

/* --- Base Section Card Styles (Copied from About Page) --- */
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


/* --- 3. SKILLS GRID Styles (Optimized for theme) --- */
.skills_wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}
.skill_tile {
    /* Slightly darker than card-bg for contrast */
    background: #0f0f0f; 
    border-radius: 12px;
    padding: 25px;
    text-align: center;
    transition: all 0.4s ease;
    border: 1px solid rgba(255,255,255,0.08);
}
.skill_tile:hover {
    background: #1a1a1a;
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(184, 255, 72, 0.15); /* Green Glow */
    border-color: var(--accent);
}
.skill_tile i {
    font-size: 40px;
    color: var(--accent); 
    margin-bottom: 15px;
    transition: 0.3s ease;
}
.skill_tile:hover i {
    transform: scale(1.05);
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

/* --- 4. MILESTONES Styles (Optimized for theme) --- */
.milestones_flex {
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 15px;
}
.milestone_tile {
    /* Style matching a clean stat block */
    background: #0f0f0f;
    color: var(--text-light);
    padding: 20px 30px;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
    flex: 1 1 200px;
}
.milestone_tile:hover {
    background: #1a1a1a;
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(184, 255, 72, 0.1);
}
.milestone_tile h2 {
    font-size: 36px;
    margin: 0;
    font-weight: 800;
    color: var(--accent); /* Accent Green Number */
}
.milestone_tile span {
    font-size: 14px;
    color: var(--muted);
    font-weight: 500;
}


/* --- Responsive Adjustments --- */
@media (max-width: 768px) {
    .page_title_center {
        font-size: 3rem;
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
    .milestones_flex {
        justify-content: center;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection