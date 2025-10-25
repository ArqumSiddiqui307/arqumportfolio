@extends('layout.apptheme')
@section('content')

<div class="ranx_container"> 
    
    <section class="page_header_section">
        <nav class="breadcrumb_center">
            <a href="{{ url('/') }}">Home</a> <span>→</span> <span>Education</span>
        </nav>
        <h1 class="page_title_center">My <span>Journey.</span></h1>
    </section>

    <div class="content_sections_wrapper">

        <div class="section_card education_timeline_card">
            <div class="section_title">Academic Qualifications</div>
            
            <div class="education_timeline">

                <div class="edu_item">
                    <div class="edu_year_container">
                        <div class="edu_year">2015 - 2018</div>
                    </div>
                    <div class="edu_content">
                        <div class="edu_title_container">
                            <div class="edu_title">GRADUATION | BSSE</div>
                            <div class="edu_subtitle">ILMA UNIVERSITY</div>
                        </div>
                        <div class="edu_text">
                            <p>Successfully completed Bachelor of Science in Software Engineering (BSSE).</p>
                        </div>
                    </div>
                </div>

                <div class="edu_item">
                    <div class="edu_year_container">
                        <div class="edu_year">2012 - 2014</div>
                    </div>
                    <div class="edu_content">
                        <div class="edu_title_container">
                            <div class="edu_title">INTERMEDIATE</div>
                            <div class="edu_subtitle">Higher Education (Inter Board Of Education)</div>
                        </div>
                        <div class="edu_text">
                            <p>Successfully completed Intermediate education.</p>
                        </div>
                    </div>
                </div>

                <div class="edu_item">
                    <div class="edu_year_container">
                        <div class="edu_year">2012</div>
                    </div>
                    <div class="edu_content">
                        <div class="edu_title_container">
                            <div class="edu_title">MATRICULATION</div>
                            <div class="edu_subtitle">Secondary Board of Education Karachi</div>
                        </div>
                        <div class="edu_text">
                            <p>Successfully completed Matriculation.</p>
                        </div>
                    </div>
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

/* --- Global Container & Page Header (Copied from About/Skills) --- */
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

/* --- Base Section Card Styles (Copied from About/Skills) --- */
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

/* --- EDUCATION TIMELINE SPECIFIC STYLES --- */

/* Timeline Container */
.education_timeline {
    position: relative;
    padding-left: 20px; /* Space for the line */
}

/* Vertical Line */
.education_timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 2px;
    background-color: rgba(255, 255, 255, 0.1); /* Subtle dark line */
}

.edu_item {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 15px 0;
    position: relative;
    margin-bottom: 20px;
}

/* Timeline Dot */
.edu_item::after {
    content: '';
    position: absolute;
    left: -7px; /* Align with the line */
    top: 25px; 
    width: 16px;
    height: 16px;
    background-color: var(--accent); /* Bright Green Dot */
    border-radius: 50%;
    border: 3px solid var(--card-bg); /* Ring effect */
    transition: all 0.3s ease;
}

.edu_item:hover::after {
    transform: scale(1.15);
    background-color: var(--text-light); /* Dot changes color on hover */
    border-color: var(--accent);
}

.edu_year_container {
    flex-shrink: 0;
    width: 120px; /* Fixed width for year column */
    padding-right: 20px;
    text-align: right;
}

.edu_year {
    color: var(--accent);
    font-weight: 700;
    font-size: 1.1rem;
    padding-top: 4px; /* Align with dot */
}

.edu_content {
    flex-grow: 1;
    padding-left: 20px;
    background: #1e1e1e; /* Subtle background for content */
    padding: 15px 20px;
    border-radius: 8px;
    border-left: 3px solid var(--accent); /* Accent bar */
    transition: all 0.3s ease;
}
.edu_item:hover .edu_content {
    background: #252525;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.edu_title_container {
    margin-bottom: 8px;
}

.edu_title {
    font-size: 18px;
    font-weight: 700;
    color: var(--text-light);
    margin-bottom: 3px;
}

.edu_subtitle {
    font-size: 14px;
    color: var(--muted);
    font-weight: 500;
}

.edu_text p {
    font-size: 15px;
    color: var(--muted);
    line-height: 1.5;
    margin: 0;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .page_title_center {
        font-size: 3rem;
    }
    .section_card {
        padding: 20px;
    }
    .edu_item {
        flex-direction: column;
        align-items: flex-start;
    }
    .edu_year_container {
        width: 100%;
        padding-right: 0;
        text-align: left;
        margin-bottom: 5px;
    }
    .edu_year {
        padding-top: 0;
    }
    .edu_content {
        padding-left: 15px;
        margin-left: 10px; /* Pushes content away from the vertical line */
    }
    /* Adjust dot position for column layout */
    .edu_item::after {
        left: -18px;
        top: 8px;
    }
    /* Adjust vertical line to the very left for mobile */
    .education_timeline {
        padding-left: 30px; 
    }
    .education_timeline::before {
        left: 10px;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection