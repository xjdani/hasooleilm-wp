<?php
/**
 * The front page template file for Hasooleilm LMS
 */

get_header(); ?>

<main id="primary" role="main">

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary to-primary-dark text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 md:py-28">
            <div class="max-w-3xl">
                <span class="inline-block bg-white/15 text-white text-xs sm:text-sm font-semibold px-4 py-1.5 rounded-full mb-6">Built by Teachers, for AKU-EB Students</span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Every AKU-EB resource you actually need. <span class="text-secondary">Free.</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl opacity-90 leading-relaxed mb-8 max-w-2xl">
                    Notes, past papers, SLOs, pacing guides, and full courses -- every one mapped to the official AKU-EB syllabus. No paywall on core content. No distractions.
                </p>

                <div class="flex flex-wrap items-center gap-2 sm:gap-3 text-sm sm:text-base opacity-80 mb-10">
                    <span class="bg-white/10 px-3 py-1 rounded-full">Classes 9-12</span>
                    <span aria-hidden="true">&middot;</span>
                    <span class="bg-white/10 px-3 py-1 rounded-full">17+ Years of Past Papers</span>
                    <span aria-hidden="true">&middot;</span>
                    <span class="bg-white/10 px-3 py-1 rounded-full">No account needed for notes</span>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-secondary text-primary-dark font-semibold rounded-lg hover:bg-white hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                        Browse Free Notes
                    </a>
                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 hover:border-white/50 transition-all text-sm sm:text-base">
                        Go to Courses &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Stats Grid -->
    <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="auto-grid">
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-3xl sm:text-4xl font-bold text-primary mb-2">17+</span>
                    <span class="text-sm text-gray-600 leading-snug">Years of AKU-EB Past Papers<br><span class="text-xs text-gray-400">2008-2025 solved & unsolved</span></span>
                </div>
                <div class="bg-primary text-white rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-3xl sm:text-4xl font-bold mb-2">AKU-EB</span>
                    <span class="text-sm opacity-90 leading-snug">Primary Focus<br><span class="text-xs opacity-70">SSC & HSSC only</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-3xl sm:text-4xl font-bold text-primary mb-2">9-12</span>
                    <span class="text-sm text-gray-600 leading-snug">Classes Covered<br><span class="text-xs text-gray-400">Built specifically for AKU-EB</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-3xl sm:text-4xl font-bold text-primary mb-2">100%</span>
                    <span class="text-sm text-gray-600 leading-snug">Free Core Access<br><span class="text-xs text-gray-400">No paywall on notes, SLOs & papers</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-xl sm:text-2xl font-bold text-primary mb-2">Teacher-Built</span>
                    <span class="text-sm text-gray-600 leading-snug">Every Resource<br><span class="text-xs text-gray-400">Reviewed by experienced teachers</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-3xl sm:text-4xl font-bold text-primary mb-2">24/7</span>
                    <span class="text-sm text-gray-600 leading-snug">Available<br><span class="text-xs text-gray-400">Any device, anywhere</span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="py-12 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="text-center mb-10 sm:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3">Everything You Need for AKU-EB</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">All content is free, curriculum-aligned, and organised specifically for AKU-EB students in Classes 9-12.</p>
            </header>

            <div class="auto-grid">
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128221;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Study Notes</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Chapter-wise notes mapped to official AKU-EB syllabi. Simplified explanations with key exam points highlighted.</p>
                    <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Study Notes &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128196;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Past Papers</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">17+ years of AKU-EB board papers from 2008 onward, with solved and unsolved versions.</p>
                    <a href="<?php echo esc_url( home_url( '/past-papers' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Past Papers &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#127919;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">SLOs</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Student Learning Outcomes broken down by subject and topic. Know exactly what to study for exams.</p>
                    <a href="<?php echo esc_url( home_url( '/slos' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse SLOs &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128218;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Study Guides</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Comprehensive guides covering the entire syllabus with exam tips and quick revision tables.</p>
                    <a href="<?php echo esc_url( home_url( '/resource-guide' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Study Guides &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128197;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pacing Guides</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Weekly study schedules to complete the syllabus before exams. Plan your revision timeline.</p>
                    <a href="<?php echo esc_url( home_url( '/pacing-guide' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Pacing Guides &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128214;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Recommended Books</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Curated textbooks and reference books for each AKU-EB subject, hand-picked by our teachers.</p>
                    <a href="<?php echo esc_url( home_url( '/recommended-books' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Recommended Books &rarr;</a>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center text-primary text-xl mb-4" aria-hidden="true">&#128336;</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Date Sheet</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">Exam schedules and important AKU-EB dates. Never miss a paper or deadline.</p>
                    <a href="<?php echo esc_url( home_url( '/date-sheet' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">Browse Date Sheet &rarr;</a>
                </div>

                <div class="bg-gradient-to-br from-primary to-primary-dark text-white rounded-xl p-6 hover:shadow-lg hover:-translate-y-1 transition-all flex flex-col">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center text-white text-xl mb-4" aria-hidden="true">&#127891;</div>
                    <h3 class="text-lg font-bold mb-2">Full Courses</h3>
                    <p class="text-sm opacity-90 leading-relaxed mb-4 flex-1">Structured courses with video lessons, interactive quizzes, and progress tracking.</p>
                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="text-secondary font-semibold text-sm hover:text-white transition-colors">Browse Full Courses &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Courses Feature -->
    <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:gap-16 lg:grid-cols-2 items-center">
                <div>
                    <span class="inline-block bg-secondary text-primary-dark text-xs font-semibold px-3 py-1 rounded-full mb-4">Full Courses</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">Go beyond notes with structured AKU-EB courses</h2>
                    <p class="text-gray-600 leading-relaxed mb-8 text-sm sm:text-base">Free notes and past papers get you started. Full courses take you the rest of the way -- video lessons, chapter quizzes, progress tracking, and completion certificates, built around the exact AKU-EB syllabus.</p>

                    <ul class="space-y-6 mb-10">
                        <li class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-semibold mb-1">Video Lessons</strong>
                                <span class="text-sm text-gray-600 leading-relaxed">Lessons recorded by experienced teachers covering every topic in the AKU-EB syllabus. Learn at your own pace, replay any time.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-semibold mb-1">Interactive Quizzes</strong>
                                <span class="text-sm text-gray-600 leading-relaxed">Chapter-wise quizzes with instant feedback and detailed answer explanations to reinforce what you've studied.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-semibold mb-1">Progress Tracking</strong>
                                <span class="text-sm text-gray-600 leading-relaxed">See your completion rate, quiz scores, and exam readiness at a glance. Always know where you stand.</span>
                            </div>
                        </li>
                        <li class="flex gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15l-2 5l9-13h-4l2-5-9 13h4z"></path></svg>
                            </div>
                            <div>
                                <strong class="block text-gray-900 font-semibold mb-1">Completion Certificates</strong>
                                <span class="text-sm text-gray-600 leading-relaxed">Earn a certificate for every course you finish -- a record of the work you've put in.</span>
                            </div>
                        </li>
                    </ul>

                    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                        Browse AKU-EB Courses
                    </a>
                </div>

                <div class="bg-gradient-to-br from-secondary to-white border border-gray-200 rounded-2xl p-8 sm:p-12 flex items-center justify-center min-h-[300px] lg:min-h-[400px]">
                    <div class="text-center text-gray-400">
                        <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        <span class="text-sm font-medium">Course Preview</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hasooleilm -->
    <section class="py-12 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="text-center mb-10 sm:mb-14">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3">Why Hasooleilm for AKU-EB</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">Purpose-built for one board. One focus. Every decision made with AKU-EB students in mind.</p>
            </header>

            <div class="auto-grid">
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Curriculum-Aligned Content</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Every resource is mapped to the official AKU-EB syllabus. No filler, no off-topic material -- exactly what your board exam demands.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Completely Free Core Access</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">All study notes, past papers, SLOs, pacing guides, and date sheets are free. No credit card, no hidden charges, no paywall on essential content.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">AI-Assisted, Teacher-Reviewed</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">AI helps simplify complex topics. Every piece of content is reviewed and refined by experienced teachers who know the AKU-EB syllabus and what the exams actually test.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Organised by Class & Subject</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Everything is categorised and searchable -- find what you need in seconds, not hours of digging through random websites.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Exam-Focused Approach</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Content is designed around actual exam patterns, frequently tested topics, and examiner expectations for AKU-EB.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Privacy First, No Tracking</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">No unnecessary tracking, no data mining, no spam. Just a clean, focused learning experience built for students.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Final CTA -->
    <section class="py-12 sm:py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8 text-sm sm:text-base">Ready to start your AKU-EB prep? All core resources are free, no account needed. Start with notes, past papers, or SLOs right now.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url( home_url( '/study-notes' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                    Browse Free Notes
                </a>
                <a href="<?php echo esc_url( home_url( '/past-papers' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-primary hover:text-primary transition-all text-sm sm:text-base">
                    AKU-EB Past Papers
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
