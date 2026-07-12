<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 */

get_header(); ?>

<main id="primary" class="site-main contact-page" role="main">
    <div class="container">
        
        <!-- Breadcrumb -->
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Contact</span>
        </nav>

        <header class="page-header">
            <h1 class="entry-title">Get in Touch</h1>
            <p class="entry-subtitle">Questions about AKU-EB notes, past papers, or study resources? Pick whichever channel works best for you. WhatsApp gets the fastest response.</p>
        </header>

        <div class="contact-layout">
            
            <!-- Left Column: Quick Channels -->
            <div class="contact-channels">
                
                <a href="https://wa.me/923036669242" target="_blank" rel="noopener" class="channel-card whatsapp">
                    <div class="channel-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"/><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1Z"/><path d="M14 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1Z"/><path d="M9.5 15.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5v1Z"/></svg>
                    </div>
                    <div class="channel-content">
                        <h3>WhatsApp</h3>
                        <p>Fastest response — usually within a few hours</p>
                        <span class="channel-action">Chat on WhatsApp →</span>
                    </div>
                </a>

                <a href="mailto:contact@hasooleilm.org" class="channel-card email">
                    <div class="channel-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <div class="channel-content">
                        <h3>Email</h3>
                        <p>For detailed queries, collaborations, or copyright notices</p>
                        <span class="channel-action">contact@hasooleilm.org</span>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="channel-card youtube">
                    <div class="channel-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                    </div>
                    <div class="channel-content">
                        <h3>YouTube</h3>
                        <p>Video lessons and platform walkthroughs</p>
                        <span class="channel-action">Visit Channel →</span>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="channel-card facebook">
                    <div class="channel-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </div>
                    <div class="channel-content">
                        <h3>Facebook</h3>
                        <p>Updates, announcements and community</p>
                        <span class="channel-action">Follow Us →</span>
                    </div>
                </a>

            </div>

            <!-- Right Column: Form & Details -->
            <div class="contact-form-wrapper">
                
                <div class="contact-form-container">
                    <h2>Send a message</h2>
                    <form action="#" method="post" class="contact-form">
                        <div class="form-group">
                            <label for="contact-name">Name</label>
                            <input type="text" id="contact-name" name="name" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input type="email" id="contact-email" name="email" placeholder="your@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" name="subject">
                                <option value="" disabled selected>Select a topic</option>
                                <option value="general">General Inquiry</option>
                                <option value="notes">Study Notes Question</option>
                                <option value="past-papers">Past Papers</option>
                                <option value="copyright">Copyright / Takedown</option>
                                <option value="collaboration">Collaboration</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact-message">Message</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Tell us how we can help..." required></textarea>
                        </div>

                        <div class="form-checkbox">
                            <input type="checkbox" id="newsletter-subscribe" name="newsletter">
                            <label for="newsletter-subscribe">Also subscribe me to the newsletter (new past papers, SLO updates, date sheet changes).</label>
                        </div>

                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>

                <!-- Our Details Box -->
                <div class="our-details-box">
                    <h3>Our Details</h3>
                    <ul class="details-list">
                        <li>
                            <strong>Address</strong>
                            <span>52/17 Darul Rehmat Wasti Rabwah, Punjab, Pakistan</span>
                        </li>
                        <li>
                            <strong>Email</strong>
                            <a href="mailto:contact@hasooleilm.org">contact@hasooleilm.org</a>
                        </li>
                        <li>
                            <strong>WhatsApp</strong>
                            <a href="https://wa.me/923036669242">+92 303 666 9242</a>
                        </li>
                        <li>
                            <strong>Response Time</strong>
                            <span>WhatsApp: within hours · Email: within 48 hours</span>
                        </li>
                    </ul>
                </div>

                <!-- Copyright Notice -->
                <div class="copyright-notice">
                    <h4>Copyright / Takedown Notices</h4>
                    <p>If you are a rights holder and believe your material is used without authorisation, please email <a href="mailto:contact@hasooleilm.org">contact@hasooleilm.org</a> with your details and the relevant URL. We will respond within 24 hours and act within 48 hours. See our <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>">Terms of Service</a> for full details.</p>
                </div>

            </div>
        </div>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>FAQ</h2>
            <p class="faq-intro">Frequently Asked Questions</p>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>Is the content really free?</h3>
                    <p>Yes! All study notes, SLOs, past papers, and resource links are currently available free of charge. Future premium features like courses will require a subscription.</p>
                </div>
                <div class="faq-item">
                    <h3>Which board and classes are covered?</h3>
                    <p>We cover AKU-EB (SSC & HSSC), Punjab Board (Matric & Intermediate), and Nazarat Taleem (Middle). Classes range from 6 to 12.</p>
                </div>
                <div class="faq-item">
                    <h3>I found a mistake in the study notes — how do I report it?</h3>
                    <p>Please use the contact form above or WhatsApp us. We review all reports and update content regularly.</p>
                </div>
                <div class="faq-item">
                    <h3>I am a copyright holder and want content removed.</h3>
                    <p>Please email us at contact@hasooleilm.org with the specific URL. We act on takedown requests within 48 hours.</p>
                </div>
                <div class="faq-item">
                    <h3>When are courses and past paper solutions coming?</h3>
                    <p>We are currently developing these features. Stay tuned via our newsletter or social media for updates!</p>
                </div>
                <div class="faq-item">
                    <h3>Can I collaborate or contribute content?</h3>
                    <p>Absolutely! We welcome teachers and experts. Please send us a message via the "Collaboration" subject in the form above.</p>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>