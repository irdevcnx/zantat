<?php include 'header2.php';?>

<style>
.page-header {
    background: url(img/banners/bod-banner.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 500px;
}
.mc{
    width:100%;
    max-width:550px;
    margin:auto;
}
.berrd td{padding:10px;vertical-align:top;text-align:left;}
.bold{font-weight:600;}



.select-qr-box {
    width: 200px;
    padding-left:20px;
    background: transparent;
    font-weight: bold;
    color: #e0382c;
    outline: none;
    border: 1px solid #e0382c;
}
.select-qr-box {
    -moz-appearance:none; /* Firefox */
     -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
}


.select-qr-box option::after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 5px;
}


select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  /* border: 0 !important; */
  background: #2c3e50;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
/*   width: 10em; */
/*   height: 3em; */
  line-height: 3;
  background: white;
  overflow: hidden;
  border-radius: .25em;
  margin-left:auto;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
/*   margin-left: auto; */
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: transparent;
  cursor: pointer;
  pointer-events: none;
  color: #e0382c;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: white;
}


.mobile-only{display:none!important}
.web-only{display:block}
@media (max-width: 991px) {
.mobile-only{display:block!important}
/* .web-only{display:none!important} */
}


.w100{
    width: 100%;
    max-width: 195px;
    margin: auto;
   }

   .hopp{width:100%;cursor:pointer; }
   .img-ic{width:30px;}
  @media (min-width: 576px) {
    .modal-dialog {
        max-width: 880px;
        margin: 1.75rem auto;
    }
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
    <div class="container-fluid bg-primary py-5 page-header  d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 text-center">
                    <h1 class="text-white animated slideInDown">Key Senior Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->





    <section id="" class="bg-whiter">
      <div class="container">
        <div class="row no-gutters">
          <div class="content col-md-12 web-only" data-aos="fade-right">
           	  <div class="row">
           	  	<div class="col-md-3">
           	  		<div id="nav-home-tab" class="hopp"  data-bs-toggle="modal"  data-bs-target="#Yap"  >
           	  			<img alt="" src="img/mgt/Chan Bin Iuan 1.png" class="img-fluid w-100">
               	  		<div class="box-go bluebox mb-2">
                			<p class=" text-left mb-4">Chan Bin Iuan</p>
                		</div>
                	</div>
           	  	</div>

           	  	<div class="col-md-3">
           	  		<div id="nav-home-tab" class="hopp"  data-bs-toggle="modal"  data-bs-target="#Chan"  >
           	  		  <img alt="" src="img/mgt/Chan Jee Chet 1.png" class="img-fluid w-100">
               	  		<div class="box-go bluebox mb-2"  id="nav-home-tab">
                			<p class=" text-left mb-4">Chan Jee Chet  </p>
                		</div>
            		</div>
           	  	</div>

           	  	<div class="col-md-3">
           	  		<div id="nav-home-tab" class="hopp"  data-bs-toggle="modal"  data-bs-target="#Eng"  >
               	  		 <img alt="" src="img/mgt/Chan Eng Hue 1.png" class="img-fluid w-100">
               	  		<div class="box-go bluebox mb-2"  id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#Iuan" type="button" role="tab" aria-controls="nav-home" aria-selected="false" >
                			<p class=" text-left mb-4">Chan Eng Hue  </p>
                		</div>
                	</div>
           	  	</div>

           	  	<div class="col-md-3">
           	  		<div id="nav-home-tab" class="hopp"  data-bs-toggle="modal"  data-bs-target="#Ling"  >
           	  		 <img alt="" src="img/mgt/Aw Ee Ling 2.png" class="img-fluid w-100">
               	  		<div class="box-go bluebox mb-2">
                			<p class=" text-left mb-4">Aw Ee Ling  </p>
                		</div>
            		</div>
           	  	</div>
           	  </div>
       	  </div>

        </div>
      </div>
    </section><!-- End About Section -->







      	<div  class="modal fade" id="Yap" role="dialog">
            <div class="modal-dialog">
              	<div class="modal-content">
                	<div class="modal-body">
                     	<h2 class="text-blue">Chan Bin Iuan </h2>

                        <h5>Managing Director / Chief Executive Officer </h5>
                        <h5> <img alt="" src="img/icon/MY-Flag-Icon.png" class="img-ic"> | Aged 40 | Male </h5>

                        <p><strong>Qualifications:</strong></p>
                        <p>Bachelor&rsquo;s degree in Mechanical
Engineering from the University of
Nottingham (2006)</p>
                        <p><strong>Experience:</strong></p>
                        <p>Mr Chan Bin Iuan started his career
at Cairnhill Metrology Sdn Bhd in
2006 as Application Engineer. He
joined Zantat in 2007 as Business
Development Executive, focusing
on digitalization and business
development activities, and was
promoted to Business Development
Manager in 2008, leading the
company&rsquo;s expansion into India. He
has been promoted to Managing
Director / Chief Executive Officer
of Zantat in 2022, responsible
for managing the company&rsquo;s
organizational structure, developing
strategic objectives and directions,
and establishing corporate culture.</p>
                        <p><strong>Membership in Board
                        Committee(s):</strong> <br/>None</p>
                        <p><strong>Directorship in other public
                        companies:</strong> <br/>None</p>
                        <p><strong>Declaration of conflict of interest
or any family relationship with
any other director and/or major
shareholders:</strong></p>
                        <p>Family relationships with other
                        directors and/or major shareholders:</p>
                        <div>
                          <ul>
                            <li>Chan Hup Ooi, Father, NonIndependent Non-Executive
                            Deputy Chairman</li>
                            <li>Chan Jee Chet, Brother, Executive
Director/Chief Operating Officer
(Perak Plants)</li>
                            <li>Chan Eng Hue, Uncle, Chief
                            Operating Officer (KL Plant)</li>
                            <li>Aw Ee Ling, Cousin, Executive
                            Director/Chief Financial Officer</li>
                            <li>Chan Jee Yang, Brother, Alternate
                            Director to Chan Hup Ooi</li>
                          </ul>
                        </div>
                        <p><strong>Declaration on conviction of
                        offences within the past 5 years:</strong><br/>He maintains a clean record with
regards to convictions for offences
(other than traffic offences, if any)
within the past 5 years.</p>


             		</div>
            	</div>
          	</div>
        </div><!-- End About Section -->



    	<div  class="modal fade" id="Chan" role="dialog">
            <div class="modal-dialog">
              	<div class="modal-content">
                	<div class="modal-body">
                     	<h2 class="text-blue">Chan Jee Chet </h2>

                        <h5>Executive Director / Chief Operating Officer (Perak Plant) </h5>
                        <h5><img alt="" src="img/icon/MY-Flag-Icon.png" class="img-ic"> | Aged 36 | Male </h5>

                        <p><strong>Qualifications:</strong></p>
                        <p>Bachelor of Business and
Commerce specialising in
Marketing from Monash University
(2012)</p>
                        <p><strong>Experience:</strong></p>
                        <p>Mr Chan Jee Chet began his career
at Zantat in 2012 as a Business
Development Executive. He was
responsible for the company&rsquo;s growth
into the Indian market and handled
sales in the Oceania region. In 2020,
he took charge of Zantat&rsquo;s new
product development team. His work
in this area and other contributions
to the company led to his promotion
in 2022 to Chief Operating Officer
of the Perak Plants. In this role,
he oversees various aspects of
operations, including production,
research and development, and
sales and marketing, showing his
broad understanding and dedication
to the company&rsquo;s objectives.</p>
                        <p><strong>Membership in Board
                        Committee(s):</strong> <br/>None</p>
                        <p><strong>Directorship in other public
                        companies:</strong> <br/>None</p>
                        <p><strong>Declaration of conflict of interest
or any family relationship with
any other director and/or major
shareholders:</strong></p>
                        <p>Family relationships with other
                        directors and/or major shareholders:</p>
                        <div>
                          <ul>
                            <li>Chan Hup Ooi, Father, NonIndependent Non-Executive
                            Deputy Chairman</li>
                            <li>Chan Bin Iuan, Brother, Managing
                            Director/Chief Executive Officer</li>
                            <li>Chan Eng Hue, Uncle, Chief
                            Operating Officer (KL Plant)</li>
                            <li>Aw Ee Ling, Cousin, Executive
                            Director/Chief Financial Officer</li>
                            <li>Chan Jee Yang, Brother, Alternate
                            Director to Chan Hup Ooi</li>
                          </ul>
                        </div>
                        <p><strong>Declaration on conviction of
                        offences within the past 5 years:</strong><br/>He maintains a clean record with
regards to convictions for offences
(other than traffic offences, if any)
within the past 5 years.</p>
             		</div>
            	</div>
          	</div>
   		 </div><!-- End About Section -->



    	<div class="modal fade" id="Eng" role="dialog">
            <div class="modal-dialog">
              	<div class="modal-content">
                	<div class="modal-body">
                     	<h2 class="text-blue">Chan Eng Hue </h2>

                        <h5>Chief Operating Officer (KL Plant) </h5>
                        <h5> <img alt="" src="img/icon/MY-Flag-Icon.png" class="img-ic"> | Aged 61 | Male </h5>

                        <p><strong>Qualifications:</strong></p>
                        <p>Diploma in Quantity Surveyor
from the Federal Institute of
Technology (currently known as
UCSI University) in 1983</p>
                        <p><strong>Experience:</strong></p>
                        <p>Mr Chan Eng Hue started his career
as a freelancer after graduation.
He then joined Zantat in 1986 as a
Production Supervisor, where he first
showcased his ability to manage
essential production lines. His
transition to the Sales & Marketing
department in 1989 and subsequent
promotion to Sales Manager in
1990 reflected his growing role in
expanding the company&rsquo;s reach.
In 2002, he was instrumental in
achieving a significant sale of calcium
carbonate dispersion to a latex glove
manufacturer, which helped Zantat
enter a new market segment. Over
the years, Chan has been involved
in enhancing product quality and
exploring new markets. His deep
understanding of the company&rsquo;s
operations led to his promotion in
2022 to Chief Operating Officer of
the KL Plant, where he is responsible
for overseeing its daily activities and
strategic direction.</p>
                        <p><strong>Declaration of conflict of interest
or any family relationship with
any other director and/or major
shareholders:</strong></p>
                        <p>Family relationships with other
                        directors and/or major shareholders:</p>
                        <div>
                          <ul>
                            <li>Chan Hup Ooi, Brother, NonIndependent Non-Executive
                            Deputy Chairman</li>
                            <li>Chan Bin Iuan, Nephew, Managing
                            Director/Chief Executive Officer</li>
                            <li>Chan Jee Chet, Nephew, Executive
Director/Chief Operating Officer
(Perak Plants)</li>
                            <li>Aw Ee Ling, Niece, Executive
                            Director/Chief Financial Officer</li>
                            <li>Chan Jee Yang, Nephew, Alternate
                            Director to Chan Hup Ooi</li>
                          </ul>
                        </div>
                        <p><strong>Declaration on conviction of
                        offences within the past 5 years:</strong><br/>He maintains a clean record with
regards to convictions for offences
(other than traffic offences, if any)
within the past 5 years.</p>

                 	</div>
            	</div>
          	</div>
   		 </div><!-- End About Section -->






   		<div class="modal fade" id="Ling" role="dialog">
            <div class="modal-dialog">
              	<div class="modal-content">
                	<div class="modal-body">
                     	<h2 class="text-blue">Aw Ee Ling </h2>
                       	<h5> Executive Director / Chief Financial Officer  </h5>
                        <h5><img alt="" src="img/icon/MY-Flag-Icon.png" class="img-ic"> | Aged 34 | Female </h5>

                        <p><strong>Qualifications:</strong></p>
                        <div>
                          <ul>
                            <li>Bachelor of Business and
Commerce, specializing in
Accounting, Econometrics, and
Business Statistics from Monash
University, Malaysia (2012)</li>
                            <li>Master of Business Administration
(Distinction) from The University of
Lancaster, United Kingdom, and
Sunway University (2020)</li>
                            <li>Certified Public Accountant of the
Malaysian Institute of Certified
Public Accountants (since 2016)</li>
                            <li>Chartered Accountant of the
Malaysian Institute of Accountants
(since 2017)</li>
                            <li>ASEAN Chartered Professional
Accountant of the ASEAN
Chartered Professional
Accountants Coordinating
Committee (since 2019)</li>
                          </ul>
                        </div>

                        <p><strong>Experience:</strong></p>
                        <p>Ms Aw Ee Ling embarked on her
finance and accounting career at
Ernst & Young in 2012, starting as an
Audit Assistant and quickly advancing
to Senior by 2013 and Supervisor
by 2015. In 2016, she joined Zantat
as Accountant, overseeing the
financial and accounting operations
and contributing significantly to
the financial health and reporting
accuracy of the company. She was
promoted to Group Accountant in
2017, broadening her responsibilities
to include the financial management
of the Zantat group of companies.
Her consistent performance and
strategic financial insights led to
her appointment as Chief Financial
Officer in 2021, a role in which she
now oversees all financial aspects
of the Group, guiding its financial
strategy and operations.</p>
                        <p><strong>Membership in Board
                        Committee(s):</strong><br/>None</p>
                        <p><strong>Directorship in other public
                        companies:</strong><br/>None</p>
                        <p><strong>Declaration of conflict of interest
or any family relationship with
any other director and/or major
shareholders:</strong></p>
                        <p>Family relationships with other
                        directors and/or major shareholders:</p>
                        <div>
                          <ul>
                            <li>Chan Hup Ooi, Uncle, NonIndependent Non-Executive
                            Deputy Chairman</li>
                            <li>Chan Eng Hue, Uncle, Chief
                            Operating Officer (KL Plant)</li>
                            <li>Chan Bin Iuan, Cousin, Managing
                            Director/Chief Executive Officer</li>
                            <li>Chan Jee Chet, Cousin, Executive
Director/Chief Operating Officer
(Perak Plants)</li>
                            <li>Chan Jee Yang, Cousin, Alternate
                            Director to Chan Hup Ooi</li>
                          </ul>
                        </div>
                        <p><strong>Declaration on conviction of
                        offences within the past 5 years:</strong><br/>She maintains a clean record with
regards to convictions for offences
(other than traffic offences, if any)
within the past 5 years.</p>
                 	</div>
            	</div>
          	</div>
   		 </div><!-- End About Section -->





<script>
//hide all tabs first
jQuery(document).ready(function($){
$('.tab-content-mobile').hide();
//show the first tab content
$('#mobile-CHOW').show();

$('#select-box').change(function () {
   dropdown = $('#select-box').val();
  //first hide all tabs again when a new option is selected
  $('.tab-content-mobile').hide();
  //then show the tab content of whatever option value was selected
  $('#' + dropdown).show();
});
});
</script>
<?php include 'footer2.php';?>
