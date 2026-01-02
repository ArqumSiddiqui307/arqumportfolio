@extends('layout.apptheme')
@section('content') 
    
{{-- --- HERO SECTION (Updated for better design) --- --}}
<section class="hero hero_section">
    <div class="hero_content">
        {{-- <img src="{{ asset('images/Arqum.png') }}" alt="Arqum Siddiqui" class="hero_profile_image"> --}}
        <h1 class="hero_title">Arqum <span>Siddiqui.</span></h1>
        <p class="hero_tagline">
            To be an active employee in your company and utilize my versatile skills. I aim to leverage knowledge of <b>Software Engineering</b> to uplift the organization through hard work, loyalty, and collaboration, delivering the best results.
        </p>

        <div class="hero_buttons_wrapper">
            <a href="mailto:arqumsiddiqui14@gmail.com" class="btn_primary">
                <i class="fa-solid fa-envelope"></i> Contact Me
            </a>
            <a href="{{ asset('Documents/Arqum_Siddiqui_CV.pdf') }}" 
                class="btn_secondary" download>
                <i class="fa-solid fa-download"></i> Download CV
            </a>
        </div>
    </div>
</section>

<div class="ranx_container">

    {{-- --- 0. INFO SECTION --- --}}
    <div class="section_card personal_info_card">
        <div class="section_title">PERSONAL INFO</div>
        <div class="milestones_flex">
            <div class="milestone_tile email_tile">
                <h2>Arqum Siddiqui</h2>
                <span>Name</span>
            </div>
            <div class="milestone_tile email_tile">
                <h2>+92 308 2575413</h2>
                <span>Phone</span>
            </div>
            <div class="milestone_tile email_tile">
                <h2>arqumsiddiqui14@gmail.com</h2>
                <span>Email</span>
            </div>
            <div class="milestone_tile email_tile">
                <h2>Karachi, Pakistan</h2>
                <span>Location</span>
            </div>
        </div>
    </div>

    {{-- --- 1. Career Milestones (from SKILLS Page) --- --}}
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

    {{-- --- 2. Technical Expertise (from ABOUT/SKILLS Page) --- --}}
    <div class="section_card skills_grid_card">
        <div class="section_title">Technical Expertise</div>
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
        </div>
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/skills') }}" class="btn_secondary">
                View All Skills <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    {{-- --- 3. Experience Timeline Snapshot (New Design) --- --}}
    <div class="section_card experience_timeline_card">
        <div class="section_title">Professional Journey (Latest)</div>
        <div class="timeline">
            
            <div class="timeline_item">
                <div class="timeline_icon">
                    <img src="{{ asset('images/logos/famewheels_logo.ico') }}" alt="FameWheels Logo" class="company_logo">
                </div>
                <div class="timeline_content">
                    <span class="timeline_date">Jan 2025 – Present</span>
                    <h3 class="timeline_title">Senior Backend Developer</h3>
                    <h4 class="timeline_company">FameWheels | Full-time | On-site</h4>
                    <ul>
                        <li>Architected and maintained <b>Laravel-based backend systems</b> for scalability.</li>
                        <li>Designed and optimized <b>MySQL & PostgreSQL databases</b>.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline_item">
                <div class="timeline_icon">
                    <img src="{{ asset('images/logos/metastrom_logo.jpeg') }}" alt="MetaStrom Logo" class="company_logo">
                </div>
                <div class="timeline_content">
                    <span class="timeline_date">Sep 2024 – Dec 2024</span>
                    <h3 class="timeline_title">Backend Developer</h3>
                    <h4 class="timeline_company">MetaStrom | Full-time | On-site</h4>
                    <ul>
                        <li>Engineered high-performance APIs and backend services using <b>Laravel and PHP</b>.</li>
                        <li>Enhanced API performance, improving delivery speed by 20%.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline_item">
                <div class="timeline_icon">
                    <img src="{{ asset('images/logos/webnet_logo.ico') }}" alt="Webnet Pakistan Logo" class="company_logo">
                </div>
                <div class="timeline_content">
                    <span class="timeline_date">Jun 2024 – Sep 2024</span>
                    <h3 class="timeline_title">Back End Developer</h3>
                    <h4 class="timeline_company">Webnet Pakistan Pvt Ltd | Full-time | On-site</h4>
                    <ul>
                        <li>Developed and maintained scalable backend systems using </b>Laravel</b>.</li>
                        <li>Troubleshot production issues, </b>reducing downtime by 30%</b>.</li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/experience') }}" class="btn_secondary">
                View Full Career History <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<style>
/* --- Theme Variables (Unchanged) --- */
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
.page_title_center span {
    color: var(--accent);
}

/* --- HERO SECTION STYLES (Cleaned up and centered) --- */
.hero_section {
    text-align: center;
    padding: 60px 0 80px;
    /* Removed card background for a clean full-width look */
}

.hero_content {
    max-width: 800px;
    margin: 0 auto;
}

.hero_profile_image {
    width: 150px; 
    height: 150px; 
    border-radius: 50%; 
    object-fit: cover; 
    margin-bottom: 25px; 
    border: 3px solid var(--accent);
    box-shadow: 0 0 20px rgba(184, 255, 72, 0.3);
}

.hero_title {
    font-size: 4.5rem; /* Larger font size */
    font-weight: 900;
    color: var(--text-light);
    margin-bottom: 15px;
    line-height: 1.1;
}
.hero_title span {
    color: var(--accent);
}

.hero_tagline {
    max-width: 700px; 
    margin: 0 auto 40px; 
    font-size: 1.1rem;
    color: var(--muted);
    line-height: 1.6;
}
.hero_tagline strong {
    color: var(--text-light); /* Changed to light text for contrast */
}

.hero_buttons_wrapper {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

/* --- Buttons (Standardized to use existing classes) --- */
.btn_primary {
    display: inline-flex;
    align-items: center;
    padding: 12px 25px;
    background-color: var(--accent);
    color: var(--bg-dark);
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s ease;
    border: 2px solid var(--accent);
}
.btn_primary:hover {
    background-color: #a4e43e;
    box-shadow: 0 0 15px rgba(184, 255, 72, 0.5);
}
.btn_primary i {
    margin-right: 8px;
}
.btn_secondary {
    display: inline-flex;
    align-items: center;
    padding: 10px 20px;
    background: transparent;
    color: var(--accent);
    font-weight: 600;
    border: 2px solid var(--accent);
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s ease;
}
.btn_secondary:hover {
    background-color: var(--accent);
    color: var(--bg-dark);
}
.btn_secondary i {
    margin-left: 8px;
}


/* --- Base Section Card Styles (Unchanged) --- */
.section_card {
    background: var(--card-bg); 
    color: var(--text-light);
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 40px; 
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

/* --- MILESTONES / PERSONAL INFO Styles (Unchanged) --- */
.milestones_flex {
    display: flex;
    justify-content: space-around;
    align-items: stretch; /* Added stretch for consistent height */
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 15px;
}
.milestone_tile {
    background: #0f0f0f;
    color: var(--text-light);
    padding: 20px 15px; /* Adjusted padding for better fit */
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
    flex: 1 1 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
/* Specific style for long email tile to handle overflow */
.milestone_tile.email_tile h2 {
    font-size: 1.1rem; /* Smaller font for long text */
    word-break: break-all;
}
.milestone_tile:hover {
    background: #1a1a1a;
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(184, 255, 72, 0.1);
}
.milestone_tile h2 {
    font-size: 24px; /* Reduced size for info tiles */
    margin: 0;
    font-weight: 500;
    color: var(--accent);
}
.milestone_tile span {
    font-size: 14px;
    color: var(--muted);
    font-weight: 500;
    margin-top: 5px;
}
/* Reverting h2 size for Career Milestones */
.milestones_card .milestone_tile h2 {
    font-size: 36px;
}


/* --- SKILLS GRID Styles (Unchanged) --- */
.skills_wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}
.skill_tile {
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
    box-shadow: 0 8px 15px rgba(184, 255, 72, 0.15); 
    border-color: var(--accent);
}
.skill_tile i {
    font-size: 40px;
    color: var(--accent); 
    margin-bottom: 15px;
    transition: 0.3s ease;
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


/* --- EXPERIENCE TIMELINE STYLES (Unchanged) --- */
.timeline {
    position: relative;
    padding: 10px 0;
}
.timeline::before {
    content: '';
    position: absolute;
    left: 25px;
    top: 0;
    width: 2px;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
}
.timeline_item {
    position: relative;
    margin-bottom: 40px;
    padding-left: 70px;
}
.timeline_icon {
    position: absolute;
    left: 10px;
    top: 0px; 
    background: #1e1e1e; 
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease; 
    border: 2px solid var(--accent); 
    z-index: 10;
    padding: 5px; 
    overflow: hidden; 
}
.company_logo {
    width: 100%; 
    height: 100%;
    object-fit: contain; 
    border-radius: 50%; 
    transition: transform 0.3s ease;
}
.timeline_item:hover .timeline_icon {
    transform: scale(1.15); 
}
.timeline_item:hover .company_logo {
    transform: scale(1.5); 
}
.timeline_content {
    background: #0f0f0f; 
    padding: 20px;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.08);
    border-left: 3px solid var(--accent);
}
.timeline_content:hover {
    background: #1a1a1a;
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(184, 255, 72, 0.1);
}
.timeline_date {
    font-size: 13px;
    color: var(--accent); 
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
}
.timeline_title {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 3px;
}
.timeline_company {
    font-size: 15px;
    color: var(--muted);
    margin-bottom: 10px;
}
.timeline_content ul {
    list-style: none;
    padding-left: 0;
    margin-top: 15px;
}
.timeline_content ul li {
    color: var(--muted);
    font-size: 15px;
    margin-bottom: 8px;
    line-height: 1.5;
}
.timeline_content ul li::before {
    content: "🚀 "; 
    color: var(--accent);
    margin-right: 5px;
}


/* --- Responsive adjustments --- */
@media (max-width: 900px) {
    .hero_title {
        font-size: 3.5rem;
    }
}
@media (max-width: 768px) {
    .hero_title {
        font-size: 3rem;
    }
    .hero_section {
        padding: 40px 0 60px;
    }
    .section_card {
        padding: 20px;
    }
    .skills_wrapper {
        grid-template-columns: 1fr;
    }
    .milestones_flex {
        justify-content: center;
    }
    /* Timeline Mobile Adjustments */
    .timeline {
        padding: 10px 0 10px 30px;
    }
    .timeline::before {
        left: 10px;
    }
    .timeline_item {
        padding-left: 30px;
    }
    .timeline_icon {
        left: -8px;
        top: 0;
    }
    .timeline_content {
        padding: 15px;
    }
    .milestone_tile.email_tile h2 {
        font-size: 14px; /* Even smaller font on mobile for email */
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection