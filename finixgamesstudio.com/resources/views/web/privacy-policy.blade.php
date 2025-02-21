@extends('web.layout.main')
@section('page-title')
{{ __('Privacy Policy') }}
@endsection
@section('content')
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Privacy Policy</h1>
                    <b>Privacy Policy and Terms of Use: Your Trust Matters at Finix Game Studio</b>
                    <p class="mb-0">At Finix Game Studio, we prioritize your privacy and transparency in how we handle
                        your information.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="current">Privacy Policy</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section section-pading">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="">
            <h1>🔒 Privacy Policy and Terms of Use for Finix Game Studio 🎮</h1>
            <p class="text-secondary"> We built the Play Store App as a <b>Free</b> app 💸. This SERVICE is provided at
                no
                cost and is intended for use "as is" 🆓. This page is used to inform visitors about our policies on the
                collection, use, and disclosure of Personal Information 🔐 if anyone decides to use our Service. </p>
            <p class="text-secondary"> By using our Service, you agree to the collection and use of your information in
                relation to this policy. The Personal Information we collect is used for providing and improving the
                Service 🚀. We will never share your data with anyone, except as described in this Privacy Policy. The
                terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which are
                accessible in our Play Store App 🎯 unless otherwise stated. </p>
            <p class="text-secondary"> By using our website 🌍, you agree to the terms outlined in this policy. Please
                read this document carefully 📄 to understand how we collect, use, and protect your information. Your
                privacy is important to us at Finix Game Studio 💖. </p>
            <h3 class="mb-3">1. 🔗 Links to Privacy Policies of Third-Party Service Providers</h3>
            <p class="text-secondary">We use third-party services that may collect information to identify you. Here are
                the links to their privacy policies:</p>
            <ul>
                <li>🔗 <a href="https://policies.google.com/privacy">Google Play Services</a></li>
                <li>📱 <a href="https://support.google.com/admob/answer/6128543?hl=en">AdMob</a></li>
                <li>📊 <a href="https://firebase.google.com/policies/analytics">Google Analytics for Firebase</a></li>
                <li>📘 <a href="https://www.facebook.com/about/privacy/update/printable">Facebook</a></li>
            </ul>


            <h3 class="mb-3">2. 📊 Information that we Collect:</h3>
            <p class="text-secondary"> We collect information about you from other services like <b>Google
                    Analytics</b>,
                <b>Flurry</b>, <b>Google Play</b>, and others 🌐. This information includes:
            </p>
            <ul>
                <li>📱 <b>Device information</b> – Device-specific details such as your hardware model and operating
                    system
                    version. Rest assured, we <b>DO NOT</b> collect any of your unique identification 🛡️.</li>
                <li>🕵️‍♂️ <b>Anonymous identifiers</b> – We use anonymous identifiers when you interact with services,
                    such as advertising platforms, and others 📊.</li>
                <li>🔢 <b>Unique application numbers</b> – Some services include a unique application number. This
                    number,
                    along with information about your installation (like your operating system type and app version), is
                    used to improve the app's performance 🚀.</li>
            </ul> <br>
            <h3 class="mb-3">3. 🔐 Personal Information That We May Collect:</h3>
            <p class="text-secondary"> We may collect personal information from services such as <b>Google
                    Analytics</b>,
                <b>Flurry</b>, <b>Google Play</b>, and others 💡. Here’s a breakdown of the permissions we might
                require:
            </p>
            <ul>
                <li><b>📸 Take Photos and Videos</b> – Allows us to use your device’s camera for taking photos or videos
                    and controlling the camera flash 💡.</li>
                <li><b>⚙️ Modify system settings</b> – Enables the app to adjust system settings for a better experience
                    🚀.</li>
                <li><b>📲 Expand/Collapse Status Bar</b> – This permission allows the app to expand or collapse the
                    status bar for smoother navigation 🧭.</li>
                <li><b>🕵️‍♂️ Anonymous Identifiers</b> – These identifiers are used when interacting with advertising
                    and other services, keeping your identity protected 🔐.</li>
                <li><b>🖼️ Photos / Media Files</b> – This permission lets the app modify or delete content in your
                    storage if necessary 📂.</li>
                <li><b>🌐 Full Network Access</b> – Used to access the device's network, including receiving update
                    notifications and checking app classification labels 📡.</li>
                <li><b>📶 Connect and Disconnect from Wi-Fi</b> – This permission is used to toggle Wi-Fi connection via
                    the app’s settings or notification toolbar 🌍.</li>
                <li><b>📏 Measure App Storage Space</b> – Helps the app determine how much storage space is used, so you
                    can keep track of your device's storage easily 🗂️.</li>
            </ul>


            <h3 class="mb-3">5. 🛡️ How Do We Protect Your Information?</h3>
            <p class="text-secondary"> 🚫 We do not use vulnerability scanning and/or scanning to PCI standards. </p>
            
            <p class="text-secondary"> 📰 We only provide articles and information. <b>We never ask for credit card
                    numbers</b> 💳❌. </p>
            <p class="text-secondary"> 🦠 We use <b>regular Malware Scanning</b> to protect our systems. </p>
            <p class="text-secondary"> 🔒 Your personal information is stored behind secured networks and is only
                accessible by a limited number of authorized persons, who are required to keep the information
                confidential 🔐. Additionally, all sensitive/credit information you provide is <b>encrypted via Secure
                    Socket Layer (SSL) technology</b> 🌐🔑. </p>
            <p class="text-secondary"> 🔧 We implement a variety of security measures when users enter, submit, or
                access their information to ensure that your personal data remains safe and protected 🛡️. </p>
            <p>We request the following permissions:</p>
            <ul>
                <li>📇 <b>android.permission.READ_CONTACTS</b></li>
                <li>📞 <b>android.permission.CALL_PHONE</b></li>
                <li>🌐 <b>android.permission.INTERNET</b></li>
                <li>📶 <b>android.permission.ACCESS_NETWORK_STATE</b></li>
                <li>📂 <b>android.permission.READ_EXTERNAL_STORAGE</b></li>
                <li>💾 <b>android.permission.WRITE_EXTERNAL_STORAGE</b></li>
                <li>📷 <b>android.permission.CAMERA</b></li>
                <li>✏️ <b>android.permission.WRITE_CONTACTS</b></li>
                <li>📱 <b>android.permission.READ_PHONE_STATE</b></li>
                <li>🎤 <b>android.permission.RECORD_AUDIO</b></li>
            </ul>
            <p class="text-secondary">Rest assured, we <b>do not share any of your information</b> 🔐.</p>
            <p>💳 All transactions are processed through a gateway provider and are <b>not stored or processed</b> on
                our
                servers 🖥️.</p> 
            <h3 class="mb-3">6. 📋 Log Data</h3>
            <p class="text-secondary"> 🚨 When you use our Service, and if an error occurs, we may collect data 📱. This
                <b>Log Data</b> might include details such as:
            </p>
            <ul>
                <li>🌐 Your device's Internet Protocol (IP) address</li>
                <li>📲 Device name</li>
                <li>💻 Operating system version</li>
                <li>⚙️ App configuration during use</li>
                <li>⏰ Time and date of usage</li>
                <li>📊 Other usage statistics</li>
            </ul>
            <p class="text-secondary">This data is gathered to help us improve the app’s performance and resolve any
                issues faster! 🚀</p>
            <h3 class="mb-3">7. 🍪 Cookies</h3>
            <p class="text-secondary"> <b>Cookies</b> are small files with bits of data, commonly used as unique
                anonymous
                identifiers 📄. They are sent to your browser from the websites you visit and stored on your device's
                memory 💾. </p>
            <p class="text-secondary"> 🍪 Our Service doesn’t directly use cookies, but third-party services in the app
                might. These third-party codes and libraries may use cookies to enhance their services 📈. </p>
            <p class="text-secondary"> You can <b>choose to accept or refuse cookies</b>. If you refuse, some parts of
                the
                Service might not work as smoothly ❌🍪. </p>

            <h3 class="mb-3">🤝 Service Providers</h3>
            <p>We may employ third-party companies and individuals for various reasons, including:</p>
            <ul>
                <li><b>🚀 To facilitate our Service</b></li>
                <li><b>🛠️ To provide the Service on our behalf</b></li>
                <li><b>💼 To perform Service-related tasks</b></li>
                <li><b>📊 To help us analyze how our Service is used</b></li>
            </ul>
            <p>We want to let users know that these third parties may have access to your Personal Information 🔒.
                However, they are required to protect this information and are not allowed to use it for any other
                purposes 🛡️.</p>
            <h4><b>📋 Information Collection and Use</b></h4>
            <p>We collect several types of data to enhance and improve our Service for you 🌟.</p>
            <h4><b>📝 Types of Data Collected</b></h4>
            <h4><b>👤 Personal Data</b></h4>
            <p>While using our Service, we may ask you to provide personally identifiable information such as:</p>
            <ul>
                <li>Your name</li>
                <li>Email address</li>
                <li>Phone number</li>
            </ul>
            <p>This data is used to contact or identify you 📞💌.</p>
            <h4><b>📊 Usage Data</b></h4>
            <p>When you access the Service on a mobile device 📱, we may automatically collect information such as:</p>
            <ul>
                <li>Device type and unique ID</li>
                <li>IP address 🌐</li>
                <li>Operating system and browser type</li>
                <li>Other diagnostic data</li>
            </ul>
            <h4 class="mb-3"><b>👁️‍🗨️ Tracking & Cookies Data</b></h4>
            <p class="text-secondary"> We use cookies 🍪 and similar tracking technologies to monitor activity on our
                Service and hold certain information. These files may include an anonymous unique identifier and are
                stored on your device 💾. Other tools like beacons, tags, and scripts help collect and analyze this data
                to improve the Service 🔍. </p>
            <p>You can instruct your browser to refuse cookies or notify you when they are being sent. However, some
                parts of the Service might not work if cookies are disabled ❌🍪.</p>
            <h4><b>🍪 Types of Cookies We Use:</b></h4>
            <ul>
                <li><b>Session Cookies:</b> Used to operate our Service.</li>
                <li><b>Preference Cookies:</b> Remember your preferences and settings ⚙️.</li>
                <li><b>Security Cookies:</b> Used for security purposes 🔐.</li>
            </ul>

            <h4><b>🔍 Information We Collect</b></h4>
            <p>Depending on how you interact with us (whether you’re reaching out 📧 or exploring our website 🌐), we
                may gather the following types of Personal Information:</p>

            <style>
            table {
                width: 100%;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                color: black;
            }

            table th,
            table td {
                padding: 15px;
                text-align: left;
                border-bottom: 2px solid #ddd;
            }

            table thead {
                background-color: #4CAF50;
                color: white;
            }

            table tbody tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            table tbody tr:hover {
                background-color: #ddd;
            }

            hr {
                border: none;
                border-top: 2px solid #4CAF50;
                margin: 10px 0;
            }

            .tableheader {
                font-size: 12px;
                /* Font size */
                font-weight: bold;
                /* Bold text */
                color: black;
                /* Text color */
                margin: 20px 0;
                /* Top and bottom margin */
                padding: 10px;
                /* Padding around the text */
                border-bottom: 2px solid black;
                /* Bottom border */
                background-color: #f0f0f0;
                /* Light background for contrast */
                display: inline-block;
                /* Makes the border fit the text */
                border-radius: 5px;
                /* Rounded corners */
            }
            </style>

            <div class="tableheader">A. Personal Information we receive from you: 📥📋</div>

            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>📂 Category</th>
                        <th>📝 Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>👤 Name & Contact Details</strong></td>
                        <td>Such as first and last name, title, prefix, email address 📧, telephone number 📞, postal
                            address 🏡, country of residence 🌍.</td>
                    </tr>
                    <tr>
                        <td><strong>🔐 Account Information</strong></td>
                        <td>Such as password(s) 🔑 you create to access the Service, username/user ID.</td>
                    </tr>
                    <tr>
                        <td><strong>🌐 Social Network Information</strong></td>
                        <td>When you log into our Services with a social network account, you may have the option of
                            sharing information, such as the username you use on that network and your friends list 👥
                            or other info that you or the third-party social network share.</td>
                    </tr>
                </tbody>
            </table>
            <div class="tableheader">B. Personal Information we collect through your use of our Services or from other
                sources: 📊🔍</div>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Device Information</strong></td>
                        <td>Such as information about your devices and your use of our Services. This includes data
                            obtained through cookies and similar technologies, as described in our Cookie & Advertising
                            Policy.</td>
                    </tr>
                    <tr>
                        <td><strong>IP Address</strong></td>
                        <td>Our systems automatically collect an IP address when Users access the Service. IP addresses
                            can be used to learn about the general location (e.g., city, state, and country) of the
                            User’s point of access to the web.</td>
                    </tr>
                    <tr>
                        <td><strong>Log Information</strong></td>
                        <td>When you access the Unity website, Services or products that use an aspect of our Service,
                            we may log a variety of technical information (“Log Info”), including but not limited to
                            User ID, device identifiers (including advertiser ID), browser information, session IDs,
                            session token data, authentication token data, unique app installation-specific ID, login
                            data, play session information, events such as monetization events. To the extent cookies
                            and similar technologies are used to do this, please see our Cookie & Advertising Policy.
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Cookies and Related Technologies</strong></td>
                        <td>We collect Personal Information through cookies and similar technologies. For more
                            information on how Unity uses cookies, the types of cookies and other technologies used, and
                            your privacy choices, please see our Cookie & Advertising Policy.</td>
                    </tr>
                    <tr>
                        <td><strong>Other Information</strong></td>
                        <td>We may obtain additional information about you from third parties such as marketers,
                            partners, researchers, and others. We may combine information that we collect from you with
                            information about you that we obtain from such third parties and information derived from
                            any other subscription, product, or Service we provide.</td>
                    </tr>
                </tbody>
            </table>

            <div class="tableheader">C. Sensitive Information: ⚠️</div>
            <p>
                ⚠️ Unless we request it, we ask that you not send us, and you not disclose, any sensitive Personal
                Information (e.g., social security numbers, information related to racial or ethnic origin, political
                opinions, religion or other beliefs, health, criminal background, or trade union membership) on or
                through the Unity website, the Services or otherwise to us.
            </p>
            <div class="tableheader">D. Aggregated, De-Identified, and/or Anonymized Information:</div>

            <p>
                📊 We may aggregate, de-identify, and/or anonymize Personal Information, i.e., transform the information
                so it no longer relates back to a person's identity so that it will no longer be considered Personal
                Information. We do so to generate other data for our use, which we may use and disclose for any purpose.
            </p>
            <br>

            <h2>Use of Data 📊</h2>
            <ul>
                <li>To provide and maintain our Service 🔧</li>
                <li>To notify you about changes to our Service 🔔</li>
                <li>To allow you to participate in interactive features of our Service when you choose to do so 🎮</li>
                <li>To provide customer support 💁‍♀️</li>
                <li>To gather analysis or valuable information so that we can improve our Service 📈</li>
                <li>To monitor the usage of our Service 📊</li>
                <li>To detect, prevent, and address technical issues ⚙️</li>
            </ul>

            <h3 class="mb-3">Transfer of Data 🔄</h3>
            <p class="text-secondary">
                Your information, including Personal Data, may be transferred to—and maintained on—computers located
                outside of your state, province, country, or other governmental jurisdiction where the data protection
                laws may differ from those of your jurisdiction. 🌍
            </p>
            <p class="text-secondary">
                If you are located outside and choose to provide information to us, please note that we transfer the
                data, including Personal Data, to and process it there. 📤
            </p>
            <p class="text-secondary">
                Your consent to this Privacy Policy followed by your submission of such information represents your
                agreement to that transfer. ✔️
            </p>
            <p class="text-secondary">
                We will take all the steps reasonably necessary to ensure that your data is treated securely and in
                accordance with this Privacy Policy and no transfer of your Personal Data will take place to an
                organization or a country unless there are adequate controls in place including the security of your
                data and other personal information. 🔒
            </p>

            <h3>Disclosure of Data ⚖️</h3>
            <h4>Legal Requirements 🏛️</h4>
            <p>
                We may disclose your Personal Data in the good faith belief that such action is necessary to:
            </p>
            <ul>
                <li>To comply with a legal obligation 📜</li>
                <li>To protect and defend the rights or property of us 🛡️</li>
                <li>To prevent or investigate possible wrongdoing in connection with the Service 🔍</li>
                <li>To protect the personal safety of users of the Service or the public 🛑</li>
                <li>To protect against legal liability ⚖️</li>
            </ul>


            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Security of Data</strong></td>
                        <td>The security of your data is important to us but remember that no method of transmission
                            over the Internet or method of electronic storage is 100% secure. While we strive to use
                            commercially acceptable means to protect your Personal Data, we cannot guarantee its
                            absolute security.</td>
                    </tr>
                    <tr>
                        <td><strong>Service Providers</strong></td>
                        <td>We may employ third-party companies and individuals to facilitate our Service ("Service
                            Providers"), provide the Service on our behalf, perform Service-related services or assist
                            us in analyzing how our Service is used. These third parties have access to your Personal
                            Data only to perform these tasks on our behalf and are obligated not to disclose or use it
                            for any other purpose.</td>
                    </tr>

                    <tr>
                        <td><strong>Links to Other Sites</strong></td>
                        <td>Our Service may contain links to other sites that are not operated by us. If you click a
                            third-party link, you will be directed to that third party's site. We strongly advise you to
                            review the Privacy Policy of every site you visit. We have no control over and assume no
                            responsibility for the content, privacy policies, or practices of any third-party sites or
                            services.</td>
                    </tr>

                    <tr>
                        <td><strong>Children's Privacy</strong></td>
                        <td>Our Service does not address anyone under the age of 18 ("Children"). We do not knowingly
                            collect personally identifiable information from anyone under the age of 18. If you are a
                            parent or guardian and you are aware that your child has provided us with Personal Data,
                            please contact us. If we become aware that we have collected Personal Data from children
                            without verification of parental consent, we take steps to remove that information from our
                            servers.</td>
                    </tr>

                    <tr>
                        <td><strong>Changes to This Privacy Policy</strong></td>
                        <td>We may update our Privacy Policy from time to time. We will notify you of any changes by
                            posting the new Privacy Policy on this page. We will let you know via email and/or a
                            prominent notice on our Service, prior to the change becoming effective and update the
                            "effective date" at the top of this Privacy Policy. You are advised to review this Privacy
                            Policy periodically for any changes. Changes to this Privacy Policy are effective when they
                            are posted on this page.</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="mb-3">2. 📢 Advertising & Data Collection</h3>
<p class="text-secondary">
    Our app uses <b>Google AdMob</b> to serve advertisements. AdMob may collect and use certain data to improve ad relevance, measure performance, and prevent fraud. This data may include:
</p>
<ul>
    <li>📱 <b>Device Information</b>: Device model, OS version, and unique device identifiers (e.g., Advertising ID).</li>
    <li>🌍 <b>IP Address</b>: Used for approximate location targeting and fraud prevention.</li>
    <li>📊 <b>Ad Interaction Data</b>: Clicks, impressions, and engagement with ads.</li>
    <li>📈 <b>App Usage Data</b>: Information about app sessions, crashes, and analytics.</li>
    <li>📍 <b>Location Data (if enabled)</b>: Approximate or precise location for location-based ads.</li>
</ul>

<h3 class="mb-3">3. 🎯 Why This Data is Collected</h3>
<p class="text-secondary">
    Google AdMob collects this data to:
</p>
<ul>
    <li>✅ Provide <b>personalized and non-personalized ads</b>.</li>
    <li>📊 Improve <b>advertising relevance and effectiveness</b>.</li>
    <li>🔍 Detect <b>fraudulent activities and ensure ad security</b>.</li>
    <li>⚖️ Comply with <b>legal requirements and regulations</b>.</li>
</ul>

<h3 class="mb-3">4. 📲 App Tracking Transparency (iOS Users)</h3>
<p class="text-secondary">
    If you are using our app on an <b>iOS device</b>, you may be asked for <b>App Tracking Transparency (ATT) permission</b> to allow personalized advertising. You can manage your tracking preferences in <b>Settings → Privacy → Tracking</b> on your iOS device.
</p>

<h3 class="mb-3">5. ❌ How to Opt-Out of Personalized Ads</h3>
<p class="text-secondary">
    Users can opt out of personalized advertising by adjusting their device settings:
</p>
<ul>
    <li>📱 <b>Android</b>: Go to <b>Settings → Google → Ads → Opt out of Ads Personalization</b>.</li>
    <li>🍏 <b>iOS</b>: Go to <b>Settings → Privacy → Tracking</b>, then disable "Allow Apps to Request to Track".</li>
</ul>

<h3 class="mb-3">6. 🔗 More Information</h3>
<p class="text-secondary">
    For more details on how Google AdMob handles user data, please visit:
</p>
<ul>
    <li>🔗 <a href="https://policies.google.com/privacy">Google Privacy Policy</a></li>
    <li>📢 <a href="https://support.google.com/admob/answer/6128543">Google AdMob & Data Usage</a></li>
</ul>

            <br><br>
            <div style="text-align: center;">
                <h3>Contact Us 📞</h3>
                <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                <p>Email: <a href="mailto:gamestudiofinix@gmail.com">gamestudiofinix@gmail.com</a> 📧</p>
                <p>We’re here to help! 💬</p>
            </div>


        </div>
    </div>
</section>
@endsection