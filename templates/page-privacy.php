<?php
/**
 * Template Name: Privacy Policy
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
                <li class="text-gray-700 font-medium" aria-current="page">Privacy Policy</li>
            </ol>
        </nav>

        <article>
            <header class="mb-8">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3">Privacy Policy</h1>
                <p class="text-gray-600 text-sm sm:text-base">How Hasooleilm collects, uses, stores, and protects your personal information.</p>
            </header>

            <!-- Table of Contents -->
            <nav class="bg-gray-50 border border-gray-200 rounded-xl p-5 sm:p-6 mb-10" aria-label="Table of contents">
                <h3 class="text-sm font-bold text-gray-900 mb-3">On this page</h3>
                <ol class="space-y-2 list-decimal list-inside p-0 m-0 text-sm">
                    <li><a href="#section-1" class="text-primary hover:text-primary-dark transition-colors">Information We Collect</a></li>
                    <li><a href="#section-2" class="text-primary hover:text-primary-dark transition-colors">How We Use Your Information</a></li>
                    <li><a href="#section-3" class="text-primary hover:text-primary-dark transition-colors">Data Storage and Security</a></li>
                    <li><a href="#section-4" class="text-primary hover:text-primary-dark transition-colors">Third-Party Services</a></li>
                    <li><a href="#section-5" class="text-primary hover:text-primary-dark transition-colors">Cookies</a></li>
                    <li><a href="#section-6" class="text-primary hover:text-primary-dark transition-colors">Children's Privacy</a></li>
                    <li><a href="#section-7" class="text-primary hover:text-primary-dark transition-colors">Your Rights</a></li>
                    <li><a href="#section-8" class="text-primary hover:text-primary-dark transition-colors">Data Retention</a></li>
                    <li><a href="#section-9" class="text-primary hover:text-primary-dark transition-colors">Changes to This Policy</a></li>
                    <li><a href="#section-10" class="text-primary hover:text-primary-dark transition-colors">Contact</a></li>
                </ol>
            </nav>

            <!-- Sections -->
            <div class="space-y-10">

                <section id="section-1">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">1. Information We Collect</h2>

                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Information you provide directly</h3>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">When you register for an account, we collect:</p>
                    <ul class="list-disc list-inside space-y-1.5 text-sm sm:text-base text-gray-700 leading-relaxed mb-4 pl-4">
                        <li>Full name</li>
                        <li>Email address</li>
                        <li>Username</li>
                        <li>Password (stored as a secure hash &mdash; we never store your plain-text password)</li>
                        <li>Date of birth</li>
                        <li>Gender</li>
                        <li>Phone number</li>
                        <li>City</li>
                        <li>Role (student, parent, or teacher)</li>
                        <li>Profile picture (optional, uploaded by you)</li>
                    </ul>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-4">For students: school name, board (Punjab / AKU-EB / Nazarat Taleem), programme, and class (6&ndash;12).<br>For teachers: school name, qualification, and years of experience.</p>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-6">When you contact us via the contact form, we collect your name, email, and message.</p>

                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Information collected automatically</h3>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-6">When you use the platform, our servers (hosted on Cloudflare) automatically log standard technical information including your IP address, browser type, device type, pages visited, and timestamps. This is standard infrastructure logging and is not used to build individual profiles.</p>

                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Google Sign-In</h3>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">If you choose to sign up or log in using Google, we receive your name and email address from Google via their OAuth service. We do not receive your Google password. We use this information only to create and identify your account on this platform.</p>
                </section>

                <section id="section-2">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">2. How We Use Your Information</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">We use your personal information for the following purposes only:</p>
                    <ul class="list-disc list-inside space-y-2 text-sm sm:text-base text-gray-700 leading-relaxed mb-4 pl-4">
                        <li>To create and manage your account</li>
                        <li>To personalise your learning experience (e.g. showing content relevant to your class and board)</li>
                        <li>To manage subscription access to premium features</li>
                        <li>To respond to your messages and support requests</li>
                        <li>To send important service-related notifications (e.g. email verification, password reset)</li>
                        <li>To improve the platform based on how it is used</li>
                    </ul>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed"><strong>We do not sell your personal data.</strong> We do not use your data for advertising. We do not share your data with third parties except as described in Section 4.</p>
                </section>

                <section id="section-3">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">3. Data Storage and Security</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">Your data is stored in a Cloudflare D1 database (SQLite at the edge) and files are stored in Cloudflare R2 object storage. All data is transmitted over HTTPS. Passwords are hashed before storage and are never readable by us. While we implement reasonable security measures, no system is completely secure and we cannot guarantee absolute security of your data.</p>
                </section>

                <section id="section-4">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">4. Third-Party Services</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">We use a small number of third-party services to operate the platform:</p>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-700 leading-relaxed list-none p-0 m-0">
                        <li><strong>Cloudflare</strong> &mdash; hosting, database, file storage, and CDN. Your data passes through and is stored on Cloudflare infrastructure. See <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener" class="text-primary hover:text-primary-dark transition-colors">Cloudflare's Privacy Policy</a>.</li>
                        <li><strong>Google OAuth</strong> &mdash; if you use Google Sign-In. See <a href="https://policies.google.com/" target="_blank" rel="noopener" class="text-primary hover:text-primary-dark transition-colors">Google's Privacy Policy</a>.</li>
                        <li><strong>Google Drive</strong> &mdash; All PDF resource files are shared via Google Drive links. Clicking these links takes you to Google's infrastructure and is subject to Google's terms.</li>
                    </ul>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mt-4">We do not share your personal information with any of these services beyond what is technically necessary to operate (e.g. your IP address reaching Cloudflare's servers when you make a request).</p>
                </section>

                <section id="section-5">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">5. Cookies</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">We use a secure, httpOnly cookie to maintain your login session. This token is not used for tracking or advertising. We do not use advertising cookies, analytics tracking cookies, or any third-party marketing cookies. Cloudflare may set technical cookies for security and performance purposes as part of their infrastructure service.</p>
                </section>

                <section id="section-6">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">6. Children's Privacy</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">This platform is designed for students in Classes 6&ndash;12 across Punjab (Middle, Matric, Intermediate), AKU-EB (SSC and HSSC), and Nazarat Taleem (Middle), which includes users who may be under 18. We require users to be at least 10 years old to register. We collect only the minimum information needed to provide the service. We do not knowingly collect data from children under 10. If you are a parent and believe your child under 10 has registered, please contact us and we will delete their account and data immediately.</p>
                </section>

                <section id="section-7">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">7. Your Rights</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">You have the right to:</p>
                    <ul class="space-y-2 text-sm sm:text-base text-gray-700 leading-relaxed list-none p-0 m-0">
                        <li><strong>Access</strong> &mdash; request a copy of the personal data we hold about you</li>
                        <li><strong>Correction</strong> &mdash; update inaccurate information via your account settings</li>
                        <li><strong>Deletion</strong> &mdash; request deletion of your account and all associated personal data</li>
                        <li><strong>Portability</strong> &mdash; request your data in a readable format</li>
                    </ul>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mt-4">To exercise any of these rights, contact us via WhatsApp (<strong>+92 303 666 9242</strong>) or the Contact page. We will respond within 7 days.</p>
                </section>

                <section id="section-8">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">8. Data Retention</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">We retain your account data for as long as your account is active. If you delete your account, we will delete your personal data within 30 days, except where we are required to retain it for legal or financial record-keeping purposes (e.g. subscription payment records).</p>
                </section>

                <section id="section-9">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">9. Changes to This Policy</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed">We may update this Privacy Policy from time to time. We will notify registered users of material changes by posting a notice on the platform. The "last updated" date at the bottom of this page will always reflect the most recent version.</p>
                </section>

                <section id="section-10">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">10. Contact</h2>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">For any privacy-related questions or requests:</p>
                    <ul class="space-y-2 text-sm sm:text-base text-gray-700 list-none p-0 m-0">
                        <li><strong>WhatsApp:</strong> +92 303 666 9242</li>
                        <li><strong>Address:</strong> 52/17 Darul Rehmat Wasti Rabwah, Pakistan</li>
                        <li><strong>Contact form:</strong> <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="text-primary hover:text-primary-dark transition-colors">hasooleilm.org/contact</a></li>
                    </ul>
                    <p class="text-sm text-gray-500 mt-6 italic">Last updated: June 2026</p>
                </section>

            </div>

            <div class="mt-10 pt-6 border-t border-gray-200">
                <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="text-primary font-semibold text-sm hover:text-primary-dark transition-colors">
                    View Terms of Service <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

        </article>
    </div>
</main>

<?php get_footer(); ?>
