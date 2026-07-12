<?php
/**
 * The front page template file for Hasooleilm LMS
 */

get_header(); ?>

<main id="primary" class="site-main home-page" role="main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">Built by Teachers, for AKU-EB Students</span>
                <h1 class="hero-title">Every AKU-EB resource you actually need. <span class="text-highlight">Free.</span></h1>
                <p class="hero-subtitle">Notes, past papers, SLOs, pacing guides, and full courses — every one mapped to the official AKU-EB syllabus. No paywall on core content. No distractions.</p>
                
                <div class="hero-stats-inline">
                    <span class="stat-item">Classes 9–12</span>
                    <span class="separator">•</span>
                    <span class="stat-item">17+ Years of Past Papers</span>
                    <span class="separator">•</span>
                    <span class="stat-item">No account needed for notes</span>
                </div>

                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="btn btn-primary">Browse Free Notes</a>
                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="btn btn-outline">Go to Courses →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Stats Grid -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">17+</span>
                    <span class="stat-label">Years of AKU-EB Past Papers<br><small>2008–2025 solved & unsolved</small></span>
                </div>
                <div class="stat-card highlight">
                    <span class="stat-number">AKU-EB</span>
                    <span class="stat-label">Primary Focus<br><small>SSC & HSSC only</small></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">9–12</span>
                    <span class="stat-label">Classes Covered<br><small>Built specifically for AKU-EB</small></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Free Core Access<br><small>No paywall on notes, SLOs & papers</small></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">Teacher-Built</span>
                    <span class="stat-label">Every Resource<br><small>Reviewed by experienced teachers</small></span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Available<br><small>Any device, anywhere</small></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="resources-section">
        <div class="container">
            <header class="section-header">
                <h2>Everything You Need for AKU-EB</h2>
                <p>All content is free, curriculum-aligned, and organised specifically for AKU-EB students in Classes 9–12.</p>
            </header>

            <div class="resources-grid">
                <!-- Study Notes -->
                <div class="resource-card">
                    <div class="icon-box">📝</div>
                    <h3>Study Notes</h3>
                    <p>Chapter-wise notes mapped to official AKU-EB syllabi. Simplified explanations with key exam points highlighted.</p>
                    <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="card-link">Browse Study Notes →</a>
                </div>

                <!-- Past Papers -->
                <div class="resource-card">
                    <div class="icon-box">📄</div>
                    <h3>Past Papers</h3>
                    <p>17+ years of AKU-EB board papers from 2008 onward, with solved and unsolved versions.</p>
                    <a href="<?php echo esc_url( home_url( '/past-papers' ) ); ?>" class="card-link">Browse Past Papers →</a>
                </div>

                <!-- SLOs -->
                <div class="resource-card">
                    <div class="icon-box">🎯</div>
                    <h3>SLOs</h3>
                    <p>Student Learning Outcomes broken down by subject and topic. Know exactly what to study for exams.</p>
                    <a href="<?php echo esc_url( home_url( '/slos' ) ); ?>" class="card-link">Browse SLOs →</a>
                </div>

                <!-- Study Guides -->
                <div class="resource-card">
                    <div class="icon-box">📚</div>
                    <h3>Study Guides</h3>
                    <p>Comprehensive guides covering the entire syllabus with exam tips and quick revision tables.</p>
                    <a href="<?php echo esc_url( home_url( '/resource-guide' ) ); ?>" class="card-link">Browse Study Guides →</a>
                </div>

                <!-- Pacing Guides -->
                <div class="resource-card">
                    <div class="icon-box">📅</div>
                    <h3>Pacing Guides</h3>
                    <p>Weekly study schedules to complete the syllabus before exams. Plan your revision timeline.</p>
                    <a href="<?php echo esc_url( home_url( '/pacing-guide' ) ); ?>" class="card-link">Browse Pacing Guides →</a>
                </div>

                <!-- Recommended Books -->
                <div class="resource-card">
                    <div class="icon-box">📖</div>
                    <h3>Recommended Books</h3>
                    <p>Curated textbooks and reference books for each AKU-EB subject, hand-picked by our teachers.</p>
                    <a href="<?php echo esc_url( home_url( '/recommended-books' ) ); ?>" class="card-link">Browse Recommended Books →</a>
                </div>

                <!-- Date Sheet -->
                <div class="resource-card">
                    <div class="icon-box">⏰</div>
                    <h3>Date Sheet</h3>
                    <p>Exam schedules and important AKU-EB dates. Never miss a paper or deadline.</p>
                    <a href="<?php echo esc_url( home_url( '/date-sheet' ) ); ?>" class="card-link">Browse Date Sheet →</a>
                </div>

                <!-- Full Courses -->
                <div class="resource-card premium">
                    <div class="icon-box">🎓</div>
                    <h3>Full Courses</h3>
                    <p>Structured courses with video lessons, interactive quizzes, and progress tracking.</p>
                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="card-link">Browse Full Courses →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Courses Feature -->
    <section class="courses-feature">
        <div class="container">
            <div class="feature-layout">
                <div class="feature-content">
                    <span class="feature-badge">Full Courses</span>
                    <h2>Go beyond notes with structured AKU-EB courses</h2>
                    <p>Free notes and past papers get you started. Full courses take you the rest of the way — video lessons, chapter quizzes, progress tracking, and completion certificates, built around the exact AKU-EB syllabus.</p>
                    
                    <ul class="feature-list">
                        <li>
                            <strong>Video Lessons</strong>
                            <span>Lessons recorded by experienced teachers covering every topic in the AKU-EB syllabus. Learn at your own pace, replay any time.</span>
                        </li>
                        <li>
                            <strong>Interactive Quizzes</strong>
                            <span>Chapter-wise quizzes with instant feedback and detailed answer explanations to reinforce what you've studied.</span>
                        </li>
                        <li>
                            <strong>Progress Tracking</strong>
                            <span>See your completion rate, quiz scores, and exam readiness at a glance. Always know where you stand.</span>
                        </li>
                        <li>
                            <strong>Completion Certificates</strong>
                            <span>Earn a certificate for every course you finish — a record of the work you've put in.</span>
                        </li>
                    </ul>

                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="btn btn-primary">Browse AKU-EB Courses</a>
                </div>
                <div class="feature-visual">
                    <!-- Placeholder for a course preview image or graphic -->
                    <div class="visual-placeholder">
                        <span>Course Preview</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hasooleilm -->
    <section class="why-section">
        <div class="container">
            <header class="section-header">
                <h2>Why Hasooleilm for AKU-EB</h2>
                <p>Purpose-built for one board. One focus. Every decision made with AKU-EB students in mind.</p>
            </header>

            <div class="why-grid">
                <div class="why-card">
                    <h3>Curriculum-Aligned Content</h3>
                    <p>Every resource is mapped to the official AKU-EB syllabus. No filler, no off-topic material — exactly what your board exam demands.</p>
                </div>
                <div class="why-card">
                    <h3>Completely Free Core Access</h3>
                    <p>All study notes, past papers, SLOs, pacing guides, and date sheets are free. No credit card, no hidden charges, no paywall on essential content.</p>
                </div>
                <div class="why-card">
                    <h3>AI-Assisted, Teacher-Reviewed</h3>
                    <p>AI helps simplify complex topics. Every piece of content is reviewed and refined by experienced teachers who know the AKU-EB syllabus and what the exams actually test.</p>
                </div>
                <div class="why-card">
                    <h3>Organised by Class & Subject</h3>
                    <p>Everything is categorised and searchable — find what you need in seconds, not hours of digging through random websites.</p>
                </div>
                <div class="why-card">
                    <h3>Exam-Focused Approach</h3>
                    <p>Content is designed around actual exam patterns, frequently tested topics, and examiner expectations for AKU-EB.</p>
                </div>
                <div class="why-card">
                    <h3>Privacy First, No Tracking</h3>
                    <p>No unnecessary tracking, no data mining, no spam. Just a clean, focused learning experience built for students.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Final CTA -->
    <section class="faq-cta-section">
        <div class="container">
            <div class="faq-cta-content">
                <h2>Frequently Asked Questions</h2>
                <p>Ready to start your AKU-EB prep? All core resources are free, no account needed. Start with notes, past papers, or SLOs right now.</p>
                
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="btn btn-primary">Browse Free Notes</a>
                    <a href="<?php echo esc_url( home_url( '/past-papers' ) ); ?>" class="btn btn-outline">AKU-EB Past Papers</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>