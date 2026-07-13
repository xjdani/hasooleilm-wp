<?php
/**
 * Template Name: About Us
 * Template Post Type: page
 */

get_header(); ?>

<main id="primary" class="py-10 sm:py-14 md:py-20" role="main">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumb -->
        <nav class="mb-8 text-sm text-gray-500" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2 list-none p-0 m-0">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-primary hover:text-primary-dark transition-colors">Home</a></li>
                <li aria-hidden="true" class="text-gray-300">/</li>
                <li class="text-gray-700 font-medium" aria-current="page">About</li>
            </ol>
        </nav>

        <!-- Hero Section -->
        <header class="mb-12 sm:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Mission</h1>
            <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl">One board. One focus. Free AKU-EB exam prep for every student who needs it.</p>
            <div class="prose prose-gray max-w-none space-y-4 text-gray-700 leading-relaxed">
                <p>At Hasooleilm, we believe exam preparation should be clear, structured, and accessible to every student. Too often, learners are left scrambling through scattered WhatsApp groups, outdated websites, or incomplete notes. We built Hasooleilm LMS to change that &mdash; to give AKU-EB students a home base for learning that is organized, reliable, and focused on what really matters: success in board exams.</p>
                <p>Our platform is Pakistan's first dedicated AKU-EB learning management system, designed with the curriculum at its core. Every resource &mdash; from study notes and past papers to SLOs and pacing guides &mdash; is mapped directly to official syllabi. No filler, no distractions, just exam-focused content that helps students master their subjects with confidence.</p>
                <p>We keep essential resources free because every student deserves a fair shot. For those who want guided depth, our premium courses layer on video lessons, chapter quizzes, progress tracking, and certificates &mdash; all still built on the same rock-solid syllabus foundation.</p>
            </div>
        </header>

        <!-- Stats Grid -->
        <section class="mb-12 sm:mb-16">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-2xl sm:text-3xl font-bold text-primary mb-2">17+</span>
                    <span class="text-sm text-gray-600 leading-snug">Years of Past Papers<br><span class="text-xs text-gray-400">2008&ndash;2025</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-2xl sm:text-3xl font-bold text-primary mb-2">9&ndash;12</span>
                    <span class="text-sm text-gray-600 leading-snug">Classes Covered<br><span class="text-xs text-gray-400">SSC &amp; HSSC</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-2xl sm:text-3xl font-bold text-primary mb-2">1</span>
                    <span class="text-sm text-gray-600 leading-snug">Board, Full Focus<br><span class="text-xs text-gray-400">AKU-EB only</span></span>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6 text-center hover:shadow-lg transition-shadow">
                    <span class="block text-2xl sm:text-3xl font-bold text-primary mb-2">100%</span>
                    <span class="text-sm text-gray-600 leading-snug">Free Access<br><span class="text-xs text-gray-400">No paywall on core content</span></span>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8">The People Behind Hasooleilm</h2>

            <div class="space-y-6">
                <div class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Aqsa Hafeez</h3>
                    <p class="text-sm text-primary font-medium mb-4">Owner, Hasooleilm &middot; MPhil Botany, Emerson College Multan &middot; Gold Medalist &middot; 8+ Years Teaching</p>
                    <div class="space-y-3 text-sm text-gray-600 leading-relaxed">
                        <p>Aqsa is the owner of Hasooleilm and the academic backbone of the platform. With an MPhil in Botany from Emerson College Multan &mdash; where she graduated as a gold medalist &mdash; and over eight years of classroom teaching experience, she brings the depth of subject knowledge and curriculum understanding that makes the content here genuinely useful for students preparing for AKU-EB exams.</p>
                        <p>Her experience teaching AKU-EB students directly informs every resource on this platform: what students actually struggle with, what the syllabus demands, and where conventional study materials fall short.</p>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Danial Mubashar</h3>
                    <p class="text-sm text-primary font-medium mb-4">Developer &amp; Platform Builder &middot; BS (Hons) Sociology &middot; 13+ Years Teaching</p>
                    <div class="space-y-3 text-sm text-gray-600 leading-relaxed">
                        <p>Danial built Hasooleilm &mdash; every part of the platform, from the study notes and SLO breakdowns to the course builder, quiz engine, and the codebase itself. With a BS (Hons) in Sociology and over 13 years of teaching experience, he knows what it means to sit across from students who are capable but under-resourced.</p>
                        <p>Rather than outsourcing the problem to a content company, Danial built Hasooleilm himself &mdash; designed, written, and maintained personally, with AI tools used to speed up the work, never to replace the judgment of people who actually know their students.</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 bg-secondary rounded-xl p-6 sm:p-8">
                <p class="text-sm text-gray-700 leading-relaxed italic">The name "Hasooleilm" (حصول علم) means "acquisition of knowledge" in Urdu. Their aim is simple: one place where any AKU-EB student, anywhere, can get the notes, past papers, and practice they need &mdash; without a paywall in the way.</p>
            </div>
        </section>

        <!-- The Story -->
        <section class="mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6">The Story</h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>What started as a personal project to organise AKU-EB resources for their own students has grown into Pakistan's first dedicated AKU-EB learning management system. We keep our promise of free access to essential resources, because education should never be locked behind paywalls.</p>
                <p>For those who want more, our structured courses add video lessons, quizzes, progress tracking, and certificates &mdash; blending traditional learning with modern tools. Every lesson follows the exact sequence and command words of the AKU-EB syllabus, so students spend time mastering what actually gets examined.</p>
                <p>Hasooleilm is also privacy-first. We don't track, spam, or sell data. Students can focus on learning without worrying about their digital footprint or being served irrelevant ads. The platform exists to serve students, not harvest their attention.</p>
                <p>Most importantly, Hasooleilm is built by educators who understand the challenges of AKU-EB. We know the exam patterns, the expectations of examiners, and the struggles students face &mdash; from juggling multiple subjects in the final months to finding reliable explanations for tricky SLOs. That's why our mission is simple: to make exam prep smarter, not harder.</p>
                <p>AKU-EB rewards understanding over rote memorisation. Our resources reflect that reality. Whether you attend a well-resourced school or study with limited support, you deserve materials that match the actual demands of the board &mdash; and a calm, organised place to use them.</p>
            </div>
        </section>

        <!-- Values Section -->
        <section class="mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">What We Stand For</h2>
            <p class="text-sm text-gray-500 mb-8">Our Values</p>

            <div class="auto-grid">
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Accessible Education</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Every AKU-EB student deserves quality study resources, regardless of where they live or what school they attend. Core content &mdash; notes, SLOs, past papers, pacing guides &mdash; is free. Hasooleilm is a true home base, not another paywalled platform.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Mapped to the Real Syllabus</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Every note, SLO, and pacing guide is built directly from the official AKU-EB curriculum and command words &mdash; not adapted from some other board's material. Topics follow the exact order and cognitive level AKU-EB examiners use. No filler, no guesswork.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Built by Teachers, Not Outsourced</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Every page on this platform is built and reviewed personally &mdash; not handed off to a content mill. AI tools help speed up the work, but teachers with 8&ndash;13+ years of classroom experience sign off on everything.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Honest &amp; Transparent</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">We clearly credit AKU-EB and any curriculum publishers our content draws from, and we operate with full transparency about how the platform is built and maintained.</p>
                </div>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6">Our Vision</h2>
            <div class="space-y-4 text-gray-700 leading-relaxed">
                <p>To become the trusted companion for every AKU-EB student &mdash; a platform where clarity replaces confusion, structure replaces chaos, and confidence replaces anxiety.</p>
                <p>We picture a student in Rabwah or Karachi or a small town in Punjab opening Hasooleilm at the start of the year and knowing exactly what to study each week. No more guessing which topics matter most. No more wondering if their notes match what the examiner wants.</p>
                <p>We see past papers not as scary unknowns but as familiar territory because students have practiced with context, command-word alignment, and clear explanations. We see the night before an exam spent reviewing targeted SLOs instead of frantically searching group chats.</p>
                <p>For some, that means using the free notes and papers. For others, it means moving through structured video courses that build understanding step by step, with quizzes that reveal gaps before the board does. Either way, the goal is the same: students who walk into their AKU-EB exams knowing they are prepared.</p>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-secondary rounded-2xl p-8 sm:p-10 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3">Have questions or want to collaborate?</h2>
            <p class="text-gray-600 mb-6 text-sm sm:text-base">Whether you're a student, parent, teacher, or educational organisation &mdash; we'd love to hear from you.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                    Contact Us
                </a>
                <a href="https://wa.me/923036669242" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-6 py-3 bg-secondary border-2 border-primary text-primary-dark font-semibold rounded-lg hover:bg-white hover:-translate-y-0.5 transition-all text-sm sm:text-base">
                    WhatsApp Us
                </a>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="inline-flex items-center justify-center px-6 py-3 text-primary font-semibold hover:text-primary-dark transition-colors text-sm sm:text-base">
                    Browse AKU-EB Courses &rarr;
                </a>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
