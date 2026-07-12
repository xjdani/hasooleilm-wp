<?php
/**
 * Template Name: Privacy Policy
 * Template Post Type: page
 */

get_header(); ?>

<main id="primary" class="site-main terms-page" role="main">
    <div class="container">
        
        <!-- Breadcrumb -->
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Privacy Policy</span>
        </nav>

        <article class="terms-content">
            <header class="entry-header">
                <h1 class="entry-title">Privacy Policy</h1>
                <p class="entry-subtitle">How Hasooleilm collects, uses, stores, and protects your personal information.</p>
            </header>

            <!-- Table of Contents -->
            <div class="toc-container">
                <h3>On this page</h3>
                <ol class="toc-list">
                    <li><a href="#section-1">Information We Collect</a></li>
                    <li><a href="#section-2">How We Use Your Information</a></li>
                    <li><a href="#section-3">Data Storage and Security</a></li>
                    <li><a href="#section-4">Third-Party Services</a></li>
                    <li><a href="#section-5">Cookies</a></li>
                    <li><a href="#section-6">Children's Privacy</a></li>
                    <li><a href="#section-7">Your Rights</a></li>
                    <li><a href="#section-8">Data Retention</a></li>
                    <li><a href="#section-9">Changes to This Policy</a></li>
                    <li><a href="#section-10">Contact</a></li>
                </ol>
            </div>

            <!-- Section 1 -->
            <section id="section-1" class="terms-section">
                <h2>1. Information We Collect</h2>
                
                <h3>Information you provide directly</h3>
                <p>When you register for an account, we collect:</p>
                <ul>
                    <li>Full name</li>
                    <li>Email address</li>
                    <li>Username</li>
                    <li>Password (stored as a secure hash — we never store your plain-text password)</li>
                    <li>Date of birth</li>
                    <li>Gender</li>
                    <li>Phone number</li>
                    <li>City</li>
                    <li>Role (student, parent, or teacher)</li>
                    <li>Profile picture (optional, uploaded by you)</li>
                </ul>
                <p>For students: school name, board (Punjab / AKU-EB / Nazarat Taleem), programme, and class (6–12).<br>
                For teachers: school name, qualification, and years of experience.</p>
                <p>When you contact us via the contact form, we collect your name, email, and message.</p>

                <h3>Information collected automatically</h3>
                <p>When you use the platform, our servers (hosted on Cloudflare) automatically log standard technical information including your IP address, browser type, device type, pages visited, and timestamps. This is standard infrastructure logging and is not used to build individual profiles.</p>

                <h3>Google Sign-In</h3>
                <p>If you choose to sign up or log in using Google, we receive your name and email address from Google via their OAuth service. We do not receive your Google password. We use this information only to create and identify your account on this platform.</p>
            </section>

            <!-- Section 2 -->
            <section id="section-2" class="terms-section">
                <h2>2. How We Use Your Information</h2>
                <p>We use your personal information for the following purposes only:</p>
                <ul>
                    <li>To create and manage your account</li>
                    <li>To personalise your learning experience (e.g. showing content relevant to your class and board)</li>
                    <li>To manage subscription access to premium features</li>
                    <li>To respond to your messages and support requests</li>
                    <li>To send important service-related notifications (e.g. email verification, password reset)</li>
                    <li>To improve the platform based on how it is used</li>
                </ul>
                <p><strong>We do not sell your personal data.</strong> We do not use your data for advertising. We do not share your data with third parties except as described in Section 4.</p>
            </section>

            <!-- Section 3 -->
            <section id="section-3" class="terms-section">
                <h2>3. Data Storage and Security</h2>
                <p>Your data is stored in a Cloudflare D1 database (SQLite at the edge) and files are stored in Cloudflare R2 object storage. All data is transmitted over HTTPS. Passwords are hashed before storage and are never readable by us. While we implement reasonable security measures, no system is completely secure and we cannot guarantee absolute security of your data.</p>
            </section>

            <!-- Section 4 -->
            <section id="section-4" class="terms-section">
                <h2>4. Third-Party Services</h2>
                <p>We use a small number of third-party services to operate the platform:</p>
                <ul>
                    <li><strong>Cloudflare</strong> — hosting, database, file storage, and CDN. Your data passes through and is stored on Cloudflare infrastructure. See <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener">Cloudflare's Privacy Policy</a>.</li>
                    <li><strong>Google OAuth</strong> — if you use Google Sign-In. See <a href="https://policies.google.com/" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
                    <li><strong>Google Drive</strong> — All PDF resource files are shared via Google Drive links. Clicking these links takes you to Google's infrastructure and is subject to Google's terms.</li>
                </ul>
                <p>We do not share your personal information with any of these services beyond what is technically necessary to operate (e.g. your IP address reaching Cloudflare's servers when you make a request).</p>
            </section>

            <!-- Section 5 -->
            <section id="section-5" class="terms-section">
                <h2>5. Cookies</h2>
                <p>We use a secure, httpOnly cookie to maintain your login session. This token is not used for tracking or advertising. We do not use advertising cookies, analytics tracking cookies, or any third-party marketing cookies. Cloudflare may set technical cookies for security and performance purposes as part of their infrastructure service.</p>
            </section>

            <!-- Section 6 -->
            <section id="section-6" class="terms-section">
                <h2>6. Children's Privacy</h2>
                <p>This platform is designed for students in Classes 6–12 across Punjab (Middle, Matric, Intermediate), AKU-EB (SSC and HSSC), and Nazarat Taleem (Middle), which includes users who may be under 18. We require users to be at least 10 years old to register. We collect only the minimum information needed to provide the service. We do not knowingly collect data from children under 10. If you are a parent and believe your child under 10 has registered, please contact us and we will delete their account and data immediately.</p>
            </section>

            <!-- Section 7 -->
            <section id="section-7" class="terms-section">
                <h2>7. Your Rights</h2>
                <p>You have the right to:</p>
                <ul>
                    <li><strong>Access</strong> — request a copy of the personal data we hold about you</li>
                    <li><strong>Correction</strong> — update inaccurate information via your account settings</li>
                    <li><strong>Deletion</strong> — request deletion of your account and all associated personal data</li>
                    <li><strong>Portability</strong> — request your data in a readable format</li>
                </ul>
                <p>To exercise any of these rights, contact us via WhatsApp (<strong>+92 303 666 9242</strong>) or the Contact page. We will respond within 7 days.</p>
            </section>

            <!-- Section 8 -->
            <section id="section-8" class="terms-section">
                <h2>8. Data Retention</h2>
                <p>We retain your account data for as long as your account is active. If you delete your account, we will delete your personal data within 30 days, except where we are required to retain it for legal or financial record-keeping purposes (e.g. subscription payment records).</p>
            </section>

            <!-- Section 9 -->
            <section id="section-9" class="terms-section">
                <h2>9. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. We will notify registered users of material changes by posting a notice on the platform. The "last updated" date at the bottom of this page will always reflect the most recent version.</p>
            </section>

            <!-- Section 10 -->
            <section id="section-10" class="terms-section">
                <h2>10. Contact</h2>
                <p>For any privacy-related questions or requests:</p>
                <ul>
                    <li><strong>WhatsApp:</strong> +92 303 666 9242</li>
                    <li><strong>Address:</strong> 52/17 Darul Rehmat Wasti Rabwah, Pakistan</li>
                    <li><strong>Contact form:</strong> <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">hasooleilm.org/contact</a></li>
                </ul>
                <p class="last-updated"><em>Last updated: June 2026</em></p>
            </section>

            <div class="terms-footer-nav">
                <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="btn-link">
                    View Terms of Service <span aria-hidden="true">→</span>
                </a>
            </div>

        </article>
    </div>
</main>

<?php get_footer(); ?>