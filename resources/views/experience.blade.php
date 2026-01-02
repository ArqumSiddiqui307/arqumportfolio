@extends('layout.apptheme')
@section('content')

<div class="ranx_container"> 
    
    <section class="page_header_section">
        <nav class="breadcrumb_center">
            <a href="{{ url('/') }}">Home</a> <span>→</span> <span>Experience</span>
        </nav>
        <h1 class="page_title_center">Career <span>History.</span></h1>
    </section>

    <div class="content_sections_wrapper">

        <div class="section_card experience_timeline_card">
            <div class="section_title">Professional Journey</div>
            
            <div class="timeline">

                <div class="timeline_item">
                    <div class="timeline_icon">
                        <img src="{{ asset('images/logos/famewheels_logo.ico') }}" alt="FameWheels Logo" class="company_logo">
                    </div>
                    <div class="timeline_content">
                        <span class="timeline_date">Jan 2025 – Present</span>
                        <h3 class="timeline_title">Senior Backend Developer</h3>
                        <h4 class="timeline_company">FameWheels</h4>
                        <ul>
                            <li>Architected and maintained **Laravel-based backend systems** ensuring scalability and performance.</li>
                            <li>Designed and optimized **MySQL & PostgreSQL databases** for high-traffic workloads.</li>
                            <li>Developed **RESTful APIs** to support mobile and web platforms.</li>
                            <li>Collaborated with cross-functional teams to deliver features on time.</li>
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
                        <h4 class="timeline_company">MetaStrom</h4>
                        <ul>
                            <li>Engineered high-performance APIs and backend services using **Laravel and PHP**.</li>
                            <li>Enhanced API performance, improving delivery speed by 20%.</li>
                            <li>Created testing and integration suites for quality assurance.</li>
                            <li>Worked closely with front-end teams for smooth API integration and UX consistency.</li>
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
                            <li>Developed and maintained scalable backend systems using **Laravel**, serving multiple enterprise clients.</li>
                            <li>Designed efficient MySQL schemas and optimized SQL queries for faster data retrieval.</li>
                            <li>Integrated third-party APIs to extend system capabilities.</li>
                            <li>Troubleshot production issues, **reducing downtime by 30%**.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline_item">
                    <div class="timeline_icon">
                        <img src="{{ asset('images/logos/amros_logo.png') }}" alt="Amros Pharmaceuticals Logo" class="company_logo">
                    </div>
                    <div class="timeline_content">
                        <span class="timeline_date">Apr 2021 – Jun 2024</span>
                        <h3 class="timeline_title">Software Developer</h3>
                        <h4 class="timeline_company">Amros Pharmaceuticals | Full-time | On-site</h4>
                        <ul>
                            <li>Led the development of **ERP system (Pharmeaze)**, streamlining operations and increasing internal efficiency.</li>
                            <li>Designed and implemented REMS to ensure compliance with pharmaceutical regulations.</li>
                            <li>Enhanced data management systems, enabling faster and more accurate business decisions.</li>
                            <li>Coordinated with cross-functional teams for software delivery.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline_item">
                    <div class="timeline_icon">
                        <img src="{{ asset('images/logos/bos_logo.png') }}" alt="BOS Logo" class="company_logo">
                    </div>
                    <div class="timeline_content">
                        <span class="timeline_date">2019 – 2021</span>
                        <h3 class="timeline_title">Web Developer</h3>
                        <h4 class="timeline_company">Level 3 BOS | Full-time | On-site</h4>
                        <ul>
                            <li>Developed new web portals and custom websites using **Laravel, PHP, and modern JavaScript**.</li>
                            <li>Maintained and improved live production portals, fixing bugs and enhancing performance.</li>
                            <li>Ensured responsive and user-friendly designs for optimal accessibility.</li>
                        </ul>
                    </div>
                </div>
            </div>
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

/* --- Global Container & Page Header (Unchanged) --- */
.ranx_container {
    max-width: 1100px;
    margin: 50px auto;
    padding: 0 20px;
}
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

/* --- Base Section Card Styles (Unchanged) --- */
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

/* --- EXPERIENCE TIMELINE SPECIFIC STYLES --- */

.timeline {
    position: relative;
    padding: 10px 0;
}

/* Vertical Line */
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

/* --- LOGO SPECIFIC STYLES --- */
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

/* --- HOVER CHANGES (Updated) --- */
.timeline_item:hover .timeline_icon {
    transform: scale(1.15); 
    background: #1e1e1e;
}
.timeline_item:hover .company_logo {
    transform: scale(1.5); 
}
/* ------------------------------- */

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
    color: var(--text-light); /* Changed to text-light for better highlight */
    font-size: 15px;
    margin-bottom: 8px;
    line-height: 1.5;
    position: relative;
    padding-left: 20px;
}
/* *** UPDATED BULLET POINT CSS *** */
.timeline_content ul li::before {
    content: '\f00c'; /* Unicode for solid checkmark */
    font-family: "Font Awesome 6 Free"; /* Use the imported FA font */
    font-weight: 900; /* For solid style */
    color: var(--accent);
    position: absolute;
    left: 0;
    top: 0;
    font-size: 14px;
    line-height: 1.5;
    margin-right: 5px;
}
/* ******************************* */

/* Responsive adjustments */
@media (max-width: 768px) {
    .page_title_center {
        font-size: 3rem;
    }
    .section_card {
        padding: 20px;
    }
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
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection