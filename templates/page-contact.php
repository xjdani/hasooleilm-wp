<?php
/**
 * Template Name: Contact Us
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
                <li class="text-gray-700 font-medium" aria-current="page">Contact</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <header class="mb-10 sm:mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3">Get in Touch</h1>
            <p class="text-gray-600 max-w-2xl text-sm sm:text-base">Questions about AKU-EB notes, past papers, or study resources? Pick whichever channel works best for you. WhatsApp gets the fastest response.</p>
        </header>

        <!-- Contact Layout -->
        <div class="grid gap-8 lg:gap-12 lg:grid-cols-[1fr_1.5fr] mb-12 sm:mb-16">

            <!-- Quick Channels -->
            <div class="space-y-4">
                <a href="https://wa.me/923036669242" target="_blank" rel="noopener" class="flex items-start gap-4 bg-white border border-gray-200 rounded-xl p-5 hover:shadow-lg hover:border-green-300 transition-all group">
                    <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-600"><path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21"/><path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1Z"/><path d="M14 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1Z"/><path d="M9.5 15.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5v1Z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">WhatsApp</h3>
                        <p class="text-sm text-gray-500 mb-1">Fastest response &mdash; usually within a few hours</p>
                        <span class="text-sm text-primary font-semibold group-hover:text-primary-dark transition-colors">Chat on WhatsApp &rarr;</span>
                    </div>
                </a>

                <a href="mailto:contact@hasooleilm.org" class="flex items-start gap-4 bg-white border border-gray-200 rounded-xl p-5 hover:shadow-lg hover:border-primary transition-all group">
                    <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">Email</h3>
                        <p class="text-sm text-gray-500 mb-1">For detailed queries, collaborations, or copyright notices</p>
                        <span class="text-sm text-primary font-semibold group-hover:text-primary-dark transition-colors">contact@hasooleilm.org</span>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="flex items-start gap-4 bg-white border border-gray-200 rounded-xl p-5 hover:shadow-lg hover:border-red-300 transition-all group">
                    <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-600"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">YouTube</h3>
                        <p class="text-sm text-gray-500 mb-1">Video lessons and platform walkthroughs</p>
                        <span class="text-sm text-primary font-semibold group-hover:text-primary-dark transition-colors">Visit Channel &rarr;</span>
                    </div>
                </a>

                <a href="#" target="_blank" rel="noopener" class="flex items-start gap-4 bg-white border border-gray-200 rounded-xl p-5 hover:shadow-lg hover:border-blue-300 transition-all group">
                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">Facebook</h3>
                        <p class="text-sm text-gray-500 mb-1">Updates, announcements and community</p>
                        <span class="text-sm text-primary font-semibold group-hover:text-primary-dark transition-colors">Follow Us &rarr;</span>
                    </div>
                </a>
            </div>

            <!-- Form & Details -->
            <div class="space-y-6">
                <div class="bg-white border border-gray-200 rounded-xl p-6 sm:p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Send a message</h2>
                    <form action="#" method="post" class="space-y-5">
                        <div>
                            <label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1.5">Name</label>
                            <input type="text" id="contact-name" name="name" placeholder="Your name" required class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg text-sm focus:outline-none focus:border-primary transition-colors placeholder:text-gray-400">
                        </div>
                        <div>
                            <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <input type="email" id="contact-email" name="email" placeholder="your@email.com" required class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg text-sm focus:outline-none focus:border-primary transition-colors placeholder:text-gray-400">
                        </div>
                        <div>
                            <label for="contact-subject" class="block text-sm font-medium text-gray-700 mb-1.5">Subject</label>
                            <select id="contact-subject" name="subject" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg text-sm focus:outline-none focus:border-primary transition-colors text-gray-700">
                                <option value="" disabled selected>Select a topic</option>
                                <option value="general">General Inquiry</option>
                                <option value="notes">Study Notes Question</option>
                                <option value="past-papers">Past Papers</option>
                                <option value="copyright">Copyright / Takedown</option>
                                <option value="collaboration">Collaboration</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact-message" class="block text-sm font-medium text-gray-700 mb-1.5">Message</label>
                            <textarea id="contact-message" name="message" rows="5" placeholder="Tell us how we can help..." required class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg text-sm focus:outline-none focus:border-primary transition-colors placeholder:text-gray-400 resize-y"></textarea>
                        </div>
                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="newsletter-subscribe" name="newsletter" class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                            <label for="newsletter-subscribe" class="text-sm text-gray-600">Also subscribe me to the newsletter (new past papers, SLO updates, date sheet changes).</label>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-dark hover:-translate-y-0.5 transition-all text-sm sm:text-base cursor-pointer">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="bg-secondary rounded-xl p-6 sm:p-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Our Details</h3>
                    <ul class="space-y-3 list-none p-0 m-0 text-sm text-gray-700">
                        <li class="flex flex-col sm:flex-row sm:gap-2"><span class="font-semibold">Address</span><span class="text-gray-600">52/17 Darul Rehmat Wasti Rabwah, Punjab, Pakistan</span></li>
                        <li class="flex flex-col sm:flex-row sm:gap-2"><span class="font-semibold">Email</span><a href="mailto:contact@hasooleilm.org" class="text-primary hover:text-primary-dark transition-colors">contact@hasooleilm.org</a></li>
                        <li class="flex flex-col sm:flex-row sm:gap-2"><span class="font-semibold">WhatsApp</span><a href="https://wa.me/923036669242" class="text-primary hover:text-primary-dark transition-colors">+92 303 666 9242</a></li>
                        <li class="flex flex-col sm:flex-row sm:gap-2"><span class="font-semibold">Response Time</span><span class="text-gray-600">WhatsApp: within hours &middot; Email: within 48 hours</span></li>
                    </ul>
                </div>

                <div class="bg-gray-50 border border-gray-200 rounded-xl p-6">
                    <h4 class="text-base font-bold text-gray-900 mb-2">Copyright / Takedown Notices</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">If you are a rights holder and believe your material is used without authorisation, please email <a href="mailto:contact@hasooleilm.org" class="text-primary hover:text-primary-dark transition-colors">contact@hasooleilm.org</a> with your details and the relevant URL. We will respond within 24 hours and act within 48 hours. See our <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="text-primary hover:text-primary-dark transition-colors">Terms of Service</a> for full details.</p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">FAQ</h2>
            <p class="text-sm text-gray-500 mb-8">Frequently Asked Questions</p>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">Is the content really free?</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Yes! All study notes, SLOs, past papers, and resource links are currently available free of charge. Future premium features like courses will require a subscription.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">Which board and classes are covered?</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">We cover AKU-EB (SSC &amp; HSSC), Punjab Board (Matric &amp; Intermediate), and Nazarat Taleem (Middle). Classes range from 6 to 12.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">I found a mistake in the study notes</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Please use the contact form above or WhatsApp us. We review all reports and update content regularly.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">I am a copyright holder and want content removed</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Please email us at contact@hasooleilm.org with the specific URL. We act on takedown requests within 48 hours.</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">When are courses coming?</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">We are currently developing these features. Stay tuned via our newsletter or social media for updates!</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-5 sm:p-6">
                    <h3 class="text-base font-bold text-gray-900 mb-2">Can I collaborate or contribute content?</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Absolutely! We welcome teachers and experts. Please send us a message via the "Collaboration" subject in the form above.</p>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
