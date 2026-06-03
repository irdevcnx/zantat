<?php include 'header2.php';?>

<style>
/* Board of Directors Profile Modal Styles */
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

.info-table {
    width: 100%;
    margin-bottom: 25px;
}

.info-table td {
    padding: 5px 0;
    vertical-align: top;
}

.info-label {
    color: #6c757d;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    padding-right: 15px;
    white-space: nowrap;
}

.info-content {
    color: #212529;
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
.hopp{cursor:pointer;}
.bluebox {
    background: #F1F1F2;
    padding: 25px;
    border-radius: 0;
    min-height:114px;
}
.bluebox p{
    color: #005677;
    font-weight:600;
}
.hopp:hover .bluebox{
    background: #005677;
    padding: 25px;
    border-radius: 0;
    min-height:114px;
}
.hopp:hover .bluebox p{
     color: #ffffff;
}
</style>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 page-header d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-white animated slideInDown">Boards of Directors</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<?php
function renderDirectorModal($data) {
  $id = $data['id'];
  $name = $data['name'];
  $position = $data['position'];
  $age = isset($data['age']) ? $data['age'] : '';
  $gender = isset($data['gender']) ? $data['gender'] : '';
  $nationality = isset($data['nationality']) ? $data['nationality'] : '';
  $appointment = isset($data['appointment']) ? $data['appointment'] : '';
  $qualifications = isset($data['qualifications']) ? $data['qualifications'] : [];
  $experience = isset($data['experience']) ? $data['experience'] : [];
  $committees = isset($data['committees']) ? $data['committees'] : 'None';
  $directorships = isset($data['directorships']) ? $data['directorships'] : 'None';
  $family = isset($data['family']) ? $data['family'] : [];

  $pronoun = ($gender == 'Female') ? 'She' : 'He';
  $possessive = ($gender == 'Female') ? 'her' : 'his';

  $conviction = isset($data['conviction']) ? $data['conviction'] : $pronoun . ' maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.';
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
                          if (!empty($age)) $info_parts[] = "Aged " . $age;
                          if (!empty($gender)) $info_parts[] = $gender;
                          echo !empty($info_parts) ? "| " . implode(" | ", $info_parts) : "";
                          ?>
                      </h5>
                      <?php endif; ?>
                      <?php if (!empty($appointment)): ?>
                      <h5 class="section-title"><span style="font-weight:600">Date of appointment to the board:</span> <?php echo $appointment; ?></h5>
                      <?php endif; ?>
                  </div>

                  <?php if (!empty($qualifications)): ?>
                  <h5 class="section-title">Qualifications:</h5>
                  <ul class="qualification-list">
                      <?php foreach ($qualifications as $qualification): ?>
                      <li><?php echo $qualification; ?></li>
                      <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>

                  <?php if (!empty($experience)): ?>
                  <h5 class="section-title">Experience:</h5>
                  <div class="experience-text">
                      <?php foreach ($experience as $paragraph): ?>
                      <p><?php echo $paragraph; ?></p>
                      <?php endforeach; ?>
                  </div>
                  <?php endif; ?>

                  <?php if (!empty($committees)): ?>
                  <h5 class="section-title">Membership in Board Committee(s):</h5>
                  <?php if (is_array($committees)): ?>
                  <ul class="qualification-list">
                      <?php foreach ($committees as $committee): ?>
                      <li><?php echo $committee; ?></li>
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
                      <?php foreach ($directorships as $directorship): ?>
                      <li><?php echo $directorship; ?></li>
                      <?php endforeach; ?>
                  </ul>
                  <?php else: ?>
                  <p><?php echo $directorships; ?></p>
                  <?php endif; ?>
                  <?php endif; ?>

                  <?php if (!empty($family)): ?>
                  <h5 class="section-title">Declaration of conflict of interest or any family relationship with any other director and/or major shareholders:</h5>
                  <?php if (is_array($family)): ?>
                  <p>Family relationships with other directors and/or major shareholders:</p>
                  <ul class="family-list">
                      <?php foreach ($family as $relationship): ?>
                      <li><?php echo $relationship; ?></li>
                      <?php endforeach; ?>
                  </ul>
                  <?php elseif ($family == 'None'): ?>
                  <p>None</p>
                  <?php endif; ?>
                  <?php else: ?>
                  <h5 class="section-title">Declaration of conflict of interest or any family relationship with any other director and/or major shareholders:</h5>
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

$directors = [
    [
        'id' => 'Yap',
        'name' => 'Yap Yoon Kong',
        'position' => 'Independent Non-Executive Chairman',
        'age' => '69',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '31 March 2023',
        'img' => 'img/bod/Yap Yoon Kong 1.png',
        'qualifications' => [
            'Bachelor of Accounting (Honours) from University of Malaya in 1982',
            'Master of Business Administration from The Cranfield Institute of Technology, UK in 1993',
            'Member and a Chartered Accountant of the Malaysian Institute of Accountants (since 1987 and 2001, respectively)',
            'Member of the Asian Institute of Chartered Bankers (since 1984).'
        ],
        'experience' => [
            'Mr Yap has vast experience in the field of banking, financial and management accounting, financial analysis, corporate affairs, budgeting and cashflow forecasting and tax planning. He has held positions in large commercial banking groups and as a Group Financial Controller of other public listed companies. He was an Executive Director of PJ Development Holdings Bhd, a public company listed on the Main Board of Bursa Malaysia Securities Berhad before retiring in 2016.'
        ],
        'committees' => 'None',
        'directorships' => 'Senior Independent Non-Executive Director of Inta Bina Group Berhad',
        'family' => [],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Iuan',
        'name' => 'Chan Bin Iuan',
        'position' => 'Executive Vice Chairman / Chief Executive Officer',
        'age' => '41',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '<br/>Managing Director
<small>(Appointed on 31 March 2023)</small><br/>Executive Vice Chairman
<small>(Redesignated on 1 January 2026)</small>',
        'img' => 'img/bod/Chan Bin Iuan 1.png',
        'qualifications' => [
            'Bachelor&rsquo;s degree in Mechanical Engineering from the University of Nottingham (2006)'
        ],
        'experience' => [
            'Mr Chan Bin Iuan started his career at Cairnhill Metrology Sdn Bhd in 2006 as Application Engineer. He joined Zantat in 2007 as Business Development Executive, focusing on digitalization and business development activities, and was promoted to Business Development Manager in 2008, leading the company&rsquo;s expansion into India. He has been promoted to Managing Director / Chief Executive Officer of Zantat in 2022, responsible for managing the company&rsquo;s organizational structure, developing strategic objectives and directions, and establishing corporate culture.'
        ],
        'committees' => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi (no longer on board); updated Chan Jee Chet title to MD/COO; updated Chan Jee Yang title to ED/CSO
        'family' => [
            'Chan Jee Chet, Brother, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Aw Ee Ling, Cousin, Executive Director/Chief Financial Officer',
            'Chan Jee Yang, Brother, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Chet',
        'name' => 'Chan Jee Chet',
        'position' => 'Managing Director / Chief Operating Officer (Perak Plants)',
        'age' => '37',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '<br/>Executive Director
<small>(Appointed on 31 March 2023)</small><br/>Managing Director
<small>(Redesignated on 1 January 2026)</small>',
        'img' => 'img/bod/Chan Jee Chet 1.png',
        'qualifications' => [
            'Bachelor of Business and Commerce specialising in Marketing from Monash University (2012)'
        ],
        'experience' => [
            'Mr Chan Jee Chet began his career at Zantat in 2012 as a Business Development Executive. He was responsible for the company&rsquo;s growth into the Indian market and handled sales in the Oceania region. In 2020, he took charge of Zantat&rsquo;s new product development team. His work in this area and other contributions to the company led to his promotion in 2022 to Chief Operating Officer of the Perak Plants. In this role, he oversees various aspects of operations, including production, research and development, and sales and marketing, showing his broad understanding and dedication to the company&rsquo;s objectives.'
        ],
        'committees' => 'None',
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

    [
        'id' => 'Aw',
        'name' => 'Aw Ee Ling',
        'position' => 'Executive Director / Chief Financial Officer',
        'age' => '35',
        'gender' => 'Female',
        'nationality' => 'Malaysian',
        'appointment' => '1 March 2025',
        'img' => 'img/bod/Aw Ee Ling 2.png',
        'qualifications' => [
            'Bachelor of Business and Commerce, specializing in Accounting, Econometrics, and Business Statistics from Monash University, Malaysia (2012)',
            'Master of Business Administration (Distinction) from The University of Lancaster, United Kingdom, and Sunway University (2020)',
            'Certified Public Accountant of the Malaysian Institute of Certified Public Accountants (since 2016)',
            'Chartered Accountant of the Malaysian Institute of Accountants (since 2017)',
            'ASEAN Chartered Professional Accountant of the ASEAN Chartered Professional Accountants Coordinating Committee (since 2019)'
        ],
        'experience' => [
            'Ms Aw Ee Ling embarked on her finance and accounting career at Ernst & Young in 2012, starting as an Audit Assistant and quickly advancing to Senior by 2013 and Supervisor by 2015. In 2016, she joined Zantat as Accountant, overseeing the financial and accounting operations and contributing significantly to the financial health and reporting accuracy of the company. She was promoted to Group Accountant in 2017, broadening her responsibilities to include the financial management of the Zantat group of companies. Her consistent performance and strategic financial insights led to her appointment as Chief Financial Officer in 2021, a role in which she now oversees all financial aspects of the Group, guiding its financial strategy and operations.'
        ],
        'committees' => 'None',
        'directorships' => 'None',
        // PDF does not list Chan Hup Ooi in Aw Ee Ling's family; updated titles to match PDF
        'family' => [
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Chan Bin Iuan, Cousin, Executive Vice Chairman/Chief Executive Officer',
            'Chan Jee Chet, Cousin, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Jee Yang, Cousin, Executive Director/Chief Strategy Officer'
        ],
        'conviction' => 'She maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Yang',
        'name' => 'Chan Jee Yang',
        'position' => 'Executive Director / Chief Strategy Officer',
        'age' => '33',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        // UPDATED: "Appointed on 1 January 2026" (not Redesignated) per PDF
        'appointment' => '<br/>Alternate Director to Chan Hup Ooi
<small>(Appointed on 21 February 2025)</small><br/>Executive Director
<small>(Appointed on 1 January 2026)</small>',
        'img' => 'img/bod/Chan Jee Yang.png',
        'qualifications' => [
            'Master of Engineering specialising in Mechatronics, Robotics and Automation Engineering from University of Melbourne',
            'Bachelor of Science specialising in Mechanical Engineering from University of Melbourne',
        ],
        'experience' => [
            'Mr Chan Jee Yang began his career by co-founding a tech startup in 2017, gaining hands-on experience in entrepreneurial leadership, fundraising, and product development. He subsequently joined Zantat in 2018 as a Mechanical Engineer, supporting the commissioning of Perak Plant&rsquo;s ball mill expansion projects. From 2020 to 2024, he transitioned into management consulting at PwC Strategy& and later McKinsey & Company, working with business leaders across public and private sectors to drive business transformation and shape regulatory standards across diverse industries. In 2024, he joined Zantat as General Manager of Calrock, where he is responsible for overseeing its daily activities and strategic direction.'
        ],
        'committees' => 'None',
        'directorships' => 'None',
        // UPDATED: Removed Chan Hup Ooi; updated titles to match PDF
        'family' => [
            'Chan Bin Iuan, Brother, Executive Vice Chairman/Chief Executive Officer',
            'Chan Jee Chet, Brother, Managing Director/Chief Operating Officer (Perak Plants)',
            'Chan Eng Hue, Uncle, Chief Operating Officer (KL Plant)',
            'Aw Ee Ling, Cousin, Executive Director/Chief Financial Officer',
        ],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Poo',
        'name' => 'Poo Lap Tuck',
        'position' => 'Independent Non-Executive Director',
        'age' => '74',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '31 March 2023',
        'img' => 'img/bod/Poo Lap Tuck.png',
        'qualifications' => [
            'Completed professional level paper of the Association of Chartered Certified Accountants in 1986 at Emile Woolf College of Accountancy',
            'Chartered Accountant of the Association of Chartered Certified Accountants (since 1987)',
            'Member of the Malaysian Institute of Accountants (since 1988)',
        ],
        'experience' => [
            'Mr Poo Lap Tuck began his career in 1977 as an audit clerk at Lim Chooi Tee & Co, moving on to serve as Finance & Administration Manager at Yit Seng Sdn Bhd in 1979, and then as Manager, Marketing, Finance & Administration at Maju Industrial Trading Sdn Bhd in 1984. After furthering his studies in London in 1985, he returned to Malaysia to join Sam Management Services as Accounts and Administration Manager in 1987. He acted as a corporate consultant for Union Paper Holdings Berhad&rsquo;s restructuring from 1989 to 1990 before joining the same company as Group Financial Controller. In 1998, he ventured into entrepreneurship by acquiring Star Corporate Services Sdn Bhd, serving as a Managing Director until 2016. He then joined Zantat as Chief Financial Officer until his retirement in 2019, after which he re-joined Star Corporate Services Sdn Bhd as a Director from August 2020 to September 2021.'
        ],
        'committees' => [
            'Chairman, Audit and Risk Management Committee',
            'Member, Nomination and Remuneration Committee'
        ],
        
        'directorships' => 'Senior Independent Non-Executive Director of Ralco Corporation Berhad',
        'family' => [],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Kian',
        'name' => 'Dr. Gan Seng Kian',
        'position' => 'Independent Non-Executive Director',
        'age' => '48',
        'gender' => 'Male',
        'nationality' => 'Malaysian',
        'appointment' => '31 March 2023',
        'img' => 'img/bod/Gan Seng Kian 1.png',
        'qualifications' => [
            'Bachelor of Engineering (Civil) from University of Technology Malaysia (2001)',
            'Master of Engineering (Civil - Construction and Management) from University of Technology Malaysia (2003)',
            'Doctorate in Business Administration from United Business Institutes Brussels (2010)',
            'Master of Business Administration from Nottingham Trent University, UK (2012)',
            'Doctor of Philosophy in Business Administration from North Borneo University College, Malaysia (2021)'
        ],
        'experience' => [
            'Dr Gan Seng Kian&rsquo;s career has spanned various sectors, beginning in 2003 at BlueScope Lysaght (M) Sdn Bhd as a Sales Engineer. Moving up, he became an Operational Manager at Perusahaan Huat Soon Chan Sdn Bhd, then transitioned to leadership as Managing Director at Industrial Fasteners Sdn Bhd and CEO at M Metal (M) Sdn Bhd. In 2015, he founded Genesis Academy Sdn Bhd, applying his managerial skills and industry insights. Throughout his career, Dr. Gan has demonstrated capability in guiding companies through growth and addressing business challenges effectively.'
        ],
        'committees' => [
            'Member, Nomination and Remuneration Committee',
            'Member, Audit and Risk Management Committee'
        ],
        'directorships' => 'None',
        'family' => [],
        'conviction' => 'He maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Arif',
        'name' => 'Rima Ramona Binti Muhammad Arif',
        'position' => 'Independent Non-Executive Director',
        'age' => '52',
        'gender' => 'Female',
        'nationality' => 'Malaysian',
        'appointment' => '31 March 2023',
        'img' => 'img/bod/Rima Ramona 1.png',
        'qualifications' => [
            'Bachelor of Laws from The University of Wales Aberystwyth (1999)',
            'Certificate in Legal Practice (2000)',
            'Admitted as an Advocate &amp; Solicitor of the High Court in Malaya (2001)'
        ],
        'experience' => [
            'Puan Rima Ramona&rsquo;s career in law began in 2002 at Messrs Adam Bachek & Associates, focusing on litigation, debt recovery, and civil suits. She then joined Messrs NK Tan & Rahim in 2006, concentrating on conveyancing and banking litigation. In 2007, she worked at Messrs Raslan Loong (now Messrs Raslan Loong Shen & Eow), handling corporate and conveyancing matters. Later, at Messrs Shahrizat Rashid & Lee, she managed high-profile conveyancing and corporate matters. As a partner at Messrs Dennis Nik & Wong, she specialized in banking transactions, commercial loans, and other legal areas. She joined Messrs Lee & Koh as a partner in 2023, continuing her focus on legal services.'
        ],
        'committees' => [
            'Chairperson, Nomination and Remuneration Committee',
            'Member, Audit and Risk Management Committee'
        ],
        'directorships' => 'None',
        'family' => [],
        'conviction' => 'She maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],

    [
        'id' => 'Bee',
        'name' => 'Dr. Teh Geok Bee',
        'position' => 'Independent Non-Executive Director',
        'age' => '56',
        'gender' => 'Female',
        'nationality' => 'Malaysian',
        'appointment' => '1 March 2025',
        'img' => 'img/bod/Prof Dr Teh Geok Bee.png',
        'qualifications' => [
            'Bachelor of Science (First Class Honours) in Chemistry from Universiti Kebangsaan Malaysia (1995)',
            'Master of Philosophy in Chemistry from University of Cambridge, United Kingdom (1998)',
            'Doctor of Philosophy in Chemistry from University of Cambridge, United Kingdom (2000)',
        ],
        // UPDATED: Experience rewritten to match PDF (generalised; removed specific university names)
        'experience' => [
            'Dr. Teh is an accomplished academic leader and scientist with extensive experience in higher education management, research, and governance. She has held key leadership positions in various academic institutions, demonstrating strong expertise in strategic planning, corporate governance, and research innovation. She has served as the Vice Chancellor / President / CEO of two private universities playing a crucial role in enhancing the institutions&rsquo; academic excellence and research capabilities. She led initiatives to strengthen academic programs, accreditation, and industry partnerships. She is an appointed Malaysian Qualifications Agency assessor for Chemistry and Physical Chemistry programmes in Malaysia since 2008. She is also a Certified &amp; Accredited HRD Corp Trainer by Ministry of Human Resources Malaysia and an appointed SAMM Technical Assessor by the Department of Standards Malaysia for ISO/IEC 17025. She conducts ISO/IEC 17025 related professional courses at the Institut Kimia Malaysia Professional Centre.'
        ],
        'committees' => 'None',
        'directorships' => 'None',
        'family' => [],
        'conviction' => 'She maintains a clean record with regards to convictions for offences (other than traffic offences, if any) within the past 5 years.'
    ],
];
?>

<!-- Board of Directors Grid Layout Section -->
<section id="" class="bg-whiter">
  <div class="container">
    <div class="row no-gutters">
      <div class="content col-md-12 web-only" data-aos="fade-right">
        <div class="row">
          <?php foreach ($directors as $director): ?>
            <div class="col-md-3 mb-4">
              <div id="nav-home-tab" class="hopp" data-bs-toggle="modal" data-bs-target="#<?php echo $director['id']; ?>">
               <img alt="" src="<?php echo $director['img'];?>" class="img-fluid w-100">
                <div class="box-go bluebox mb-2">
                  <p class=" text-left"><?php echo $director['name']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Generate all Director Modal Pop-ups -->
<?php
foreach ($directors as $director) {
    renderDirectorModal($director);
}
?>

<!-- Mobile View Dropdown -->
<div class="mobile-only">
  <?php foreach ($directors as $director): ?>
  <div id="mobile-<?php echo $director['id']; ?>" class="tab-content-mobile" style="display: none;">
    <h3><?php echo $director['name']; ?></h3>
    <p><strong><?php echo $director['position']; ?></strong></p>
  </div>
  <?php endforeach; ?>
</div>

<script>
jQuery(document).ready(function($){
  $('.tab-content-mobile').hide();
  $('#mobile-CHOW').show();

  $('#select-box').change(function () {
     dropdown = $('#select-box').val();
    $('.tab-content-mobile').hide();
    $('#' + dropdown).show();
  });
});
</script>

<?php include 'footer2.php';?>