<?php include 'header2.php';?>

<style>
.page-header {
    background: url(img/banners/bod-banner.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 500px;
}

/* ── Shared Modal Styles (same as BOD) ── */
.modal-dialog {
    max-width: 880px;
    margin: 1.75rem auto;
}

.modal-content {
    border-radius: 0;
    border: none;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.modal-body {
    padding: 30px;
}

.text-blue {
    color: #0056b3;
    margin-bottom: 10px;
    font-weight: 600;
}

.profile-header {
    margin-bottom: 20px;
}

.profile-header h5 {
    margin-bottom: 8px;
    font-weight: 500;
}

.img-ic {
    width: 24px;
    height: auto;
    margin-right: 5px;
    vertical-align: middle;
}

.section-title {
    font-weight: 600;
    color: #333;
    margin-top: 20px;
    margin-bottom: 10px;
    text-transform: none;
}

.qualification-list {
    list-style-type: none;
    padding-left: 0;
}

.qualification-list li {
    position: relative;
    padding-left: 15px;
    margin-bottom: 10px;
}

.qualification-list li:before {
    content: "•";
    position: absolute;
    left: 0;
    color: #0056b3;
}

.experience-text p {
    margin-bottom: 15px;
    text-align: justify;
}

.family-list {
    list-style-type: none;
    padding-left: 0;
}

.family-list li {
    position: relative;
    padding-left: 15px;
    margin-bottom: 8px;
}

.family-list li:before {
    content: "•";
    position: absolute;
    left: 0;
    color: #0056b3;
}

/* ── Grid Cards ── */
.hopp { cursor: pointer; }

.bluebox {
    background: #F1F1F2;
    padding: 25px;
    border-radius: 0;
    min-height: 114px;
}

.bluebox p {
    color: #005677;
    font-weight: 600;
}

.hopp:hover .bluebox {
    background: #005677;
    padding: 25px;
    border-radius: 0;
    min-height: 114px;
}

.hopp:hover .bluebox p {
    color: #ffffff;
}

.mobile-only { display: none !important; }
.web-only { display: block; }

@media (max-width: 991px) {
    .mobile-only { display: block !important; }
}
</style>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 page-header d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-white animated slideInDown">Key Senior Management</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<?php
// Reusable modal renderer — identical logic to BOD page
function renderSeniorManagementModal($data) {
    $id           = $data['id'];
    $name         = $data['name'];
    $position     = $data['position'];
    $age          = isset($data['age'])          ? $data['age']          : '';
    $gender       = isset($data['gender'])       ? $data['gender']       : '';
    $nationality  = isset($data['nationality'])  ? $data['nationality']  : '';
    $appointment  = isset($data['appointment'])  ? $data['appointment']  : '';
    $qualifications = isset($data['qualifications']) ? $data['qualifications'] : [];
    $experience   = isset($data['experience'])   ? $data['experience']   : [];
    $committees   = isset($data['committees'])   ? $data['committees']   : '';
    $directorships = isset($data['directorships']) ? $data['directorships'] : '';
    $family       = isset($data['family'])       ? $data['family']       : [];

    $pronoun = ($gender == 'Female') ? 'She' : 'He';

    $conviction = isset($data['conviction'])
        ? $data['conviction']
        : $pronoun . ' maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.';
    ?>

    <div class="modal fade" id="<?php echo $id; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-blue"><?php echo $name; ?></h2>

                    <div class="profile-header">
                        <h5><?php echo $position; ?></h5>
                        <?php if (!empty($age) || !empty($gender) || !empty($nationality)): ?>
                        <h5>
                            <?php if (!empty($nationality)): ?>
                            <img alt="" src="img/icon/MY-Flag-Icon.png" class="img-ic">
                            <?php endif; ?>
                            <?php
                            $info_parts = [];
                            if (!empty($age))    $info_parts[] = 'Aged ' . $age;
                            if (!empty($gender)) $info_parts[] = $gender;
                            echo !empty($info_parts) ? '| ' . implode(' | ', $info_parts) : '';
                            ?>
                        </h5>
                        <?php endif; ?>
                        <?php if (!empty($appointment)): ?>
                        <h5 class="section-title">
                            <span style="font-weight:600">Date of appointment as key senior management:</span>
                            <?php echo $appointment; ?>
                        </h5>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($qualifications)): ?>
                    <h5 class="section-title">Qualifications:</h5>
                    <ul class="qualification-list">
                        <?php foreach ($qualifications as $q): ?>
                        <li><?php echo $q; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (!empty($experience)): ?>
                    <h5 class="section-title">Experience:</h5>
                    <div class="experience-text">
                        <?php foreach ($experience as $para): ?>
                        <p><?php echo $para; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($committees)): ?>
                    <h5 class="section-title">Membership in Board Committee(s):</h5>
                    <?php if (is_array($committees)): ?>
                    <ul class="qualification-list">
                        <?php foreach ($committees as $c): ?>
                        <li><?php echo $c; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php else: ?>
                    <p><?php echo $committees; ?></p>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php if (!empty($directorships)): ?>
                    <h5 class="section-title">Directorship in other public companies:</h5>
                    <?php if (is_array($directorships)): ?>
                    <ul class="qualification-list">
                        <?php foreach ($directorships as $d): ?>
                        <li><?php echo $d; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php else: ?>
                    <p><?php echo $directorships; ?></p>
                    <?php endif; ?>
                    <?php endif; ?>

                    <h5 class="section-title">Declaration of conflict of interest or any family relationship with any other director and/or major shareholders:</h5>
                    <?php if (!empty($family) && is_array($family)): ?>
                    <p>Family relationships with other directors and/or major shareholders:</p>
                    <ul class="family-list">
                        <?php foreach ($family as $rel): ?>
                        <li><?php echo $rel; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php elseif ($family === 'None'): ?>
                    <p>None</p>
                    <?php else: ?>
                    <p><?php echo $pronoun; ?> has no conflict of interest with the Group and has no family relationship with any Director and/or major shareholder of the Group.</p>
                    <?php endif; ?>

                    <h5 class="section-title">Declaration on conviction of offences within the past 5 years:</h5>
                    <p><?php echo $conviction; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
}

// ── Senior Management Data (sourced from IAR 2025 PDF p.126) ──
$management = [

    // Chan Bin Iuan — profile cross-referenced to BOD p.118
    [
        'id'          => 'Iuan',
        'name'        => 'Chan Bin Iuan',
        'position'    => 'Executive Vice Chairman / Chief Executive Officer',
        'age'         => '41',
        'gender'      => 'Male',
        'nationality' => 'Malaysian',
        'img'         => 'img/mgt/Chan Bin Iuan 1.png',
        'qualifications' => [
            'Bachelor&rsquo;s degree in Mechanical Engineering from the University of Nottingham (2006)'
        ],
        'experience' => [
            'Mr Chan Bin Iuan started his career at Cairnhill Metrology Sdn Bhd in 2006 as Application Engineer. He joined Zantat in 2007 as Business Development Executive, focusing on digitalization and business development activities, and was promoted to Business Development Manager in 2008, leading the company&rsquo;s expansion into India. He has been promoted to Managing Director / Chief Executive Officer of Zantat in 2022, responsible for managing the company&rsquo;s organizational structure, developing strategic objectives and directions, and establishing corporate culture.'
        ],
        'committees'    => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi; updated titles to match PDF p.118 & p.126
        'family' => [
            'Chan Jee Chet, Brother, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Aw Ee Ling, Cousin, Executive Director/Chief Financial Officer',
            'Chan Jee Yang, Brother, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    // Chan Jee Chet — profile cross-referenced to BOD p.119
    [
        'id'          => 'Chet',
        'name'        => 'Chan Jee Chet',
        // UPDATED: title redesignated to Managing Director per PDF p.119
        'position'    => 'Managing Director / Chief Operating Officer (Perak Plants)',
        'age'         => '37',
        'gender'      => 'Male',
        'nationality' => 'Malaysian',
        'img'         => 'img/mgt/Chan Jee Chet 1.png',
        'qualifications' => [
            'Bachelor of Business and Commerce specialising in Marketing from Monash University (2012)'
        ],
        'experience' => [
            'Mr Chan Jee Chet began his career at Zantat in 2012 as a Business Development Executive. He was responsible for the company&rsquo;s growth into the Indian market and handled sales in the Oceania region. In 2020, he took charge of Zantat&rsquo;s new product development team. His work in this area and other contributions to the company led to his promotion in 2022 to Chief Operating Officer of the Perak Plants. In this role, he oversees various aspects of operations, including production, research and development, and sales and marketing, showing his broad understanding and dedication to the company&rsquo;s objectives.'
        ],
        'committees'    => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi; updated Chan Bin Iuan title to EVC/CEO; updated Chan Jee Yang title to ED/CSO
        'family' => [
            'Chan Bin Iuan, Brother, Executive Vice Chairman/Chief Executive Officer',
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Aw Ee Ling, Cousin, Executive Director/Chief Financial Officer',
            'Chan Jee Yang, Brother, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    // Chan Jee Yang — profile cross-referenced to BOD p.120
    [
        'id'          => 'Yang',
        'name'        => 'Chan Jee Yang',
        'position'    => 'Executive Director / Chief Strategy Officer',
        'age'         => '33',
        'gender'      => 'Male',
        'nationality' => 'Malaysian',
        // UPDATED: "Appointed on 1 January 2026" per PDF (not Redesignated)
        'appointment' => '<br/>Alternate Director to Chan Hup Ooi
<small>(Appointed on 21 February 2025)</small><br/>Executive Director
<small>(Appointed on 1 January 2026)</small>',
        'img'         => 'img/bod/Chan Jee Yang.png',
        'qualifications' => [
            'Master of Engineering specialising in Mechatronics, Robotics and Automation Engineering from University of Melbourne',
            'Bachelor of Science specialising in Mechanical Engineering from University of Melbourne'
        ],
        'experience' => [
            'Mr Chan Jee Yang began his career by co-founding a tech startup in 2017, gaining hands-on experience in entrepreneurial leadership, fundraising, and product development. He subsequently joined Zantat in 2018 as a Mechanical Engineer, supporting the commissioning of Perak Plant&rsquo;s ball mill expansion projects. From 2020 to 2024, he transitioned into management consulting at PwC Strategy&amp; and later McKinsey &amp; Company, working with business leaders across public and private sectors to drive business transformation and shape regulatory standards across diverse industries. In 2024, he joined Zantat as General Manager of Calrock, where he is responsible for overseeing its daily activities and strategic direction.'
        ],
        'committees'    => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi; updated sibling/cousin titles to match PDF p.120
        'family' => [
            'Chan Bin Iuan, Brother, Executive Vice Chairman/Chief Executive Officer',
            'Chan Jee Chet, Brother, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Aw Ee Ling, Cousin, Executive Director/Chief Financial Officer'
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    // Aw Ee Ling — profile cross-referenced to BOD p.121
    [
        'id'          => 'Ling',
        'name'        => 'Aw Ee Ling',
        'position'    => 'Executive Director / Chief Financial Officer',
        'age'         => '35',
        'gender'      => 'Female',
        'nationality' => 'Malaysian',
        'appointment' => '1 March 2025',
        'img'         => 'img/mgt/Aw Ee Ling 2.png',
        'qualifications' => [
            'Bachelor of Business and Commerce, specializing in Accounting, Econometrics, and Business Statistics from Monash University, Malaysia (2012)',
            'Master of Business Administration (Distinction) from The University of Lancaster, United Kingdom, and Sunway University (2020)',
            'Certified Public Accountant of the Malaysian Institute of Certified Public Accountants (since 2016)',
            'Chartered Accountant of the Malaysian Institute of Accountants (since 2017)',
            'ASEAN Chartered Professional Accountant of the ASEAN Chartered Professional Accountants Coordinating Committee (since 2019)'
        ],
        'experience' => [
            'Ms Aw Ee Ling embarked on her finance and accounting career at Ernst &amp; Young in 2012, starting as an Audit Assistant and quickly advancing to Senior by 2013 and Supervisor by 2015. In 2016, she joined Zantat as Accountant, overseeing the financial and accounting operations and contributing significantly to the financial health and reporting accuracy of the company. She was promoted to Group Accountant in 2017, broadening her responsibilities to include the financial management of the Zantat group of companies. Her consistent performance and strategic financial insights led to her appointment as Chief Financial Officer in 2021, a role in which she now oversees all financial aspects of the Group, guiding its financial strategy and operations.'
        ],
        'committees'    => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi; updated titles to match PDF p.121
        'family' => [
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Chan Bin Iuan, Cousin, Executive Vice Chairman/Chief Executive Officer',
            'Chan Jee Chet, Cousin, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Jee Yang, Cousin, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'She maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    // Chan Eng Hue — sourced from PDF p.126 (Senior Management section)
    [
        'id'          => 'Eng',
        'name'        => 'Chan Eng Hue',
        'position'    => 'Chief Operating Officer (KL Plant)',
        // UPDATED: age corrected to 63 per PDF p.126 (was 62 in old code)
        'age'         => '63',
        'gender'      => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '1 January 2022',
        'img'         => 'img/mgt/Chan Eng Hue 1.png',
        'qualifications' => [
            'Diploma in Quantity Surveyor from the Federal Institute of Technology (currently known as UCSI University) in 1983'
        ],
        'experience' => [
            'Mr Chan Eng Hue started his career as a freelancer after graduation. He then joined Zantat in 1986 as a Production Supervisor, where he first showcased his ability to manage essential production lines. His transition to the Sales &amp; Marketing department in 1989 and subsequent promotion to Sales Manager in 1990 reflected his growing role in expanding the company&rsquo;s reach. In 2002, he was instrumental in achieving a significant sale of calcium carbonate dispersion to a latex glove manufacturer, which helped Zantat enter a new market segment. Over the years, Chan has been involved in enhancing product quality and exploring new markets. His deep understanding of the company&rsquo;s operations led to his promotion in 2022 to Chief Operating Officer of the KL Plant, where he is responsible for overseeing its daily activities and strategic direction.'
        ],
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi (Brother); updated nephew/niece titles to match PDF p.126
        'family' => [
            'Chan Bin Iuan, Nephew, Executive Vice Chairman/Chief Executive Officer',
            'Chan Jee Chet, Nephew, Managing Director/Chief Operating Officer (Perak Plants)',
            'Aw Ee Ling, Niece, Executive Director/Chief Financial Officer',
            'Chan Jee Yang, Nephew, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],
];
?>

<!-- Senior Management Grid -->
<section class="bg-whiter">
    <div class="container">
        <div class="row no-gutters">
            <div class="content col-md-12 web-only" data-aos="fade-right">
                <div class="row">
                    <?php foreach ($management as $person): ?>
                    <div class="col-md-3 mb-4">
                        <div class="hopp" data-bs-toggle="modal" data-bs-target="#<?php echo $person['id']; ?>">
                            <img alt="" src="<?php echo $person['img']; ?>" class="img-fluid w-100">
                            <div class="box-go bluebox mb-2">
                                <p class="text-left"><?php echo $person['name']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Generate all Senior Management Modals -->
<?php foreach ($management as $person): ?>
    <?php renderSeniorManagementModal($person); ?>
<?php endforeach; ?>

<!-- Mobile View -->
<div class="mobile-only">
    <?php foreach ($management as $person): ?>
    <div id="mobile-<?php echo $person['id']; ?>" class="tab-content-mobile" style="display:none;">
        <h3><?php echo $person['name']; ?></h3>
        <p><strong><?php echo $person['position']; ?></strong></p>
    </div>
    <?php endforeach; ?>
</div>

<script>
jQuery(document).ready(function($){
    $('.tab-content-mobile').hide();
    $('#mobile-Iuan').show();

    $('#select-box').change(function(){
        var dropdown = $('#select-box').val();
        $('.tab-content-mobile').hide();
        $('#' + dropdown).show();
    });
});
</script>

<?php include 'footer2.php';?>