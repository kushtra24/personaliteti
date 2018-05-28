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
            'content' => "<p>
Our Contact Information
This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally identifiable information’ (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.

What personal information do we collect from the people that visit our blog, website or app?

When ordering or registering on our site, as appropriate, you may be asked to enter your
When do we collect information?

We collect information from you when you subscribe to a newsletter, fill out a form or enter information on our site.

How do we use your information?

We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:

• To personalize user’s experience and to allow us to deliver the type of content and product offerings in which you are most interested.
• To send periodic emails regarding your order or other products and services.

How do we protect visitor information?

Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.

We use regular Malware Scanning.

We do not use an SSL certificate
• We only provide articles and information. We never ask for personal or private information like email addresses, or credit card numbers.

Do we use ‘cookies’?

Yes. Cookies are small files that a site or its service provider transfers to your computer’s hard drive through your Web browser (if you allow) that enables the site’s or service provider’s systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.

We use cookies to:
• Keep track of advertisements.

You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser’s Help menu to learn the correct way to modify your cookies.

If you disable cookies off, some features will be disabled It won’t affect the user’s experience that make your site experience more efficient and some of our services will not function properly.

However, you can still place orders .

Third-party disclosure

We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it’s release is appropriate to comply with the law, enforce our site policies, or protect ours or others’ rights, property, or safety.

However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.

Third-party links

Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.

Google

Google’s advertising requirements can be summed up by Google’s Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en

We have not enabled Google AdSense on our site but we may do so in the future.

California Online Privacy Protection Act

CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivably the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy. – See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf

According to CalOPPA we agree to the following:
Users can visit our site anonymously.
Once this privacy policy is created, we will add a link to it on our home page or as a minimum on the first significant page after entering our website.
Our Privacy Policy link includes the word ‘Privacy’ and can be easily be found on the page specified above.

Users will be notified of any privacy policy changes:
• On our Privacy Policy Page
Users are able to change their personal information:
• By emailing us

How does our site handle do not track signals?
We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.

Does our site allow third-party behavioral tracking?
It’s also important to note that we allow third-party behavioral tracking

COPPA (Children Online Privacy Protection Act)

When it comes to the collection of personal information from children under 13, the Children’s Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, the nation’s consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children’s privacy and safety online.

We do not specifically market to children under 13.

Fair Information Practices

The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.

In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:
We will notify the users via in-site notification
• Within 1 business day

We also agree to the Individual Redress Principle, which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.

CAN SPAM Act

The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.

We collect your email address in order to:

To be in accordance with CANSPAM we agree to the following:

If at any time you would like to unsubscribe from receiving future emails, you can email us at
and we will promptly remove you from ALL correspondence.

Contacting Us

If there are any questions regarding this privacy policy you may contact us using the information below.
            
            </p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Kushtet perdorimit",
            'slug' => "kushtet_perdorimit",
            'content' => "<p>

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
disagree with any part of the terms then you may not access the Service. This
Terms of Service agreement for personalitetet based on the Terms and
Conditions from [TermsFeed](https://termsfeed.com/).

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


            
            </p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "impressum",
            'slug' => "impressum",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Pyetjet me te shpeshta",
            'slug' => "pts",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
