<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class pageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => "Rreth nesh",
            'slug' => "rreth_nesh",
	        'content' => "<p>Content of a simple post</p>",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Teoria jone",
            'slug' => "teoria_jone",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Politikat privatesise",
            'slug' => "politikat_privatesise",
            'content' => '<h1>Privacy Policy of personalitetet.com</h1>

            <p>personalitetet.com operates the http://www.personalitetet.com website, which provides the SERVICE.</p>
            
            <p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the personalitetet.com website.</p>
            
            <p>If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>
            
            <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at http://www.personalitetet.com, unless otherwise defined in this Privacy Policy.</p>
            
            <h2>Information Collection and Use</h2>
            
            <p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>
            
            <h2>Log Data</h2>
            
            <p>We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer’s Internet Protocol ("IP") address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.</p>
            
            <h2>Cookies</h2>
            
            <p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer’s hard drive.</p>
            
            <p>Our website uses these "cookies" to collection information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.</p>
            
            <h2>Service Providers</h2>
            
            <p>We may employ third-party companies and individuals due to the following reasons:</p>
            
            <ul>
                <li>To facilitate our Service;</li>
                <li>To provide the Service on our behalf;</li>
                <li>To perform Service-related services; or</li>
                <li>To assist us in analyzing how our Service is used.</li>
            </ul>
            
            <p>We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>
            
            <h2>Security</h2>
            
            <p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>
            
            <h2>Links to Other Sites</h2>
            
            <p>Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
            
            <p>Children’s Privacy</p>
            
            <p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>
            
            <h2>Changes to This Privacy Policy</h2>
            
            <p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page. <a href="https://gdprprivacypolicy.net">This privacy policy was created with the GDPR Generator</a>.</p>
            
            <h2>Contact Us</h2>
            
            <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Kushtet perdorimit",
            'slug' => "kushtet_perdorimit",
            'content' => '<p>

            Terms of Service ("Terms")  
==========================

Last updated: May 27, 2018


Please read these Terms of Service ("Terms", "Terms of Service") carefully
before using the personalitetet.com website (the "Service") operated by
personalitetet ("us", "we", or "our").

Your access to and use of the Service is conditioned on your acceptance of and
compliance with these Terms. These Terms apply to all visitors, users and
others who access or use the Service.

By accessing or using the Service you agree to be bound by these Terms. If you
disagree with any part of the terms then you may not access the Service.

Accounts  
--------

When you create an account with us, you must provide us information that is
accurate, complete, and current at all times. Failure to do so constitutes a
breach of the Terms, which may result in immediate termination of your account
on our Service.

You are responsible for safeguarding the password that you use to access the
Service and for any activities or actions under your password, whether your
password is with our Service or a third-party service.

You agree not to disclose your password to any third party. You must notify us
immediately upon becoming aware of any breach of security or unauthorized use
of your account.

Links To Other Web Sites  
------------------------

Our Service may contain links to third-party web sites or services that are
not owned or controlled by personalitetet.

personalitetet has no control over, and assumes no responsibility for, the
content, privacy policies, or practices of any third party web sites or
services. You further acknowledge and agree that personalitetet shall not be
responsible or liable, directly or indirectly, for any damage or loss caused
or alleged to be caused by or in connection with use of or reliance on any
such content, goods or services available on or through any such web sites or
services.

We strongly advise you to read the terms and conditions and privacy policies
of any third-party web sites or services that you visit.

Termination  
-----------

We may terminate or suspend access to our Service immediately, without prior
notice or liability, for any reason whatsoever, including without limitation
if you breach the Terms.

All provisions of the Terms which by their nature should survive termination
shall survive termination, including, without limitation, ownership
provisions, warranty disclaimers, indemnity and limitations of liability.

We may terminate or suspend your account immediately, without prior notice or
liability, for any reason whatsoever, including without limitation if you
breach the Terms.

Upon termination, your right to use the Service will immediately cease. If you
wish to terminate your account, you may simply discontinue using the Service.

All provisions of the Terms which by their nature should survive termination
shall survive termination, including, without limitation, ownership
provisions, warranty disclaimers, indemnity and limitations of liability.

Governing Law  
-------------

These Terms shall be governed and construed in accordance with the laws of
Albania, without regard to its conflict of law provisions.

Our failure to enforce any right or provision of these Terms will not be
considered a waiver of those rights. If any provision of these Terms is held
to be invalid or unenforceable by a court, the remaining provisions of these
Terms will remain in effect. These Terms constitute the entire agreement
between us regarding our Service, and supersede and replace any prior
agreements we might have between us regarding the Service.

Changes  
-------

We reserve the right, at our sole discretion, to modify or replace these Terms
at any time. If a revision is material we will try to provide at least 30 days
notice prior to any new terms taking effect. What constitutes a material
change will be determined at our sole discretion.

By continuing to access or use our Service after those revisions become
effective, you agree to be bound by the revised terms. If you do not agree to
the new terms, please stop using the Service.

Contact Us  
----------

If you have any questions about these Terms, please contact us.


            
            </p>',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "IMPRESSUM",
            'slug' => "impressum",
            'content' => '
<p>Personalitetet.com është faqe edukuese dhe vetdijesuëse rreth tipeve të përsonaliteteve, bazuar në studimët e Carl G. Jung</p>
<p>Për çfardo kërkes apo ankesë mund të drejtohuni në informacionet në vazhdim</p>

Kontakt
<a href:mailto:info@personalitetet.com>info@personalitetet.com</a>
            ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Pyetjët më të shpeshta",
            'slug' => "pts",
            'content' => '
            <h2> </h2>
            
            ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
