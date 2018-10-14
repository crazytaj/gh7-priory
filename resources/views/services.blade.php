@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    .dis {
        display: none
    }
</style>
<script>
    function cool() {
        var vari = $("#cool")
        vari.toggleClass('dis')
    }

    


</script>


<div class="jumbotron">
    <h1>Immigration Information</h1> 
    <br>
    <h4>Information for those who need it most. For more specific questions, access the forums section of the website.</h4>
</div>
<div class = 'container'>
    <div style = 'background-color:#55D159'>
    <center><p id="1st" onclick = "cool()" style = 'color: white' >Asylum</p></center>
    
    <div style = 'background-color:green'>
    <div class = "container"><p class = "dis" id = 'cool' style = 'color: white'>Asylum is an immigration benefit that allows certain foreign nationals who fear persecution to remain lawfully in the U.S. indefinitely. People who are granted asylum may apply for lawful permanent residence (a green card) one year after being granted asylum. With some exceptions, an asylum application generally must be filed within one year of the applicant’s last entry into the U.S.
    An asylum seeker must prove that he or she has a well-founded fear of persecution, that is, the mistreatment that is inflicted either directly by the government, or by individuals whom the government cannot or will not control, that happens frequently or over a long period of time based on one or more of five grounds:
    Race
    Religion
    Nationality
    Membership in a particular social group (Most LGBTQ individuals who apply for asylum qualify under this category)
    Political opinion
    In order to apply for asylum, you must fill out a Form I-589 (https://www.uscis.gov/i-589 , https://www.uscis.gov/system/files_force/files/form/i-589.pdf?download=1 , https://www.uscis.gov/system/files_force/files/form/i-589instr.pdf?download=1 ), Application for Asylum and for Withholding of Removal, within one year of your arrival to the United States. There is no fee to apply for asylum.
    Filing for asylum is a very serious decision and you should consult with an attorney before filing.  If you file on your own, please keep a copy of every piece of paper you submit for your records.  You should also send the application by certified mail (or through a delivery service such as FedEx or UPS) so that you are given a tracking number for the package.  This is sometimes the only way to prove that you filed for asylum on time. The asylum application consists of:
    Immigration Form I-589 A declaration (detailed personal statement by the applicant)
    Corroborating documents (medical reports, police reports, letters from witnesses, etc.) to back up the applicant’s story
    Country conditions documentation (human rights reports, newspaper articles, reports from expert witnesses) demonstrating how the government has persecuted you, either directly or indirectly
    You may include your spouse and children who are in the United States on your application at the time you file or at any time until a final decision is made on your case. To include your child on your application, the child must be under 21 and unmarried.
    After an application is filed, DHS will issue a receipt notice to let you know that the document was properly filed.  If you do not receive a receipt notice, your application may not have been properly filed.
    It can be very difficult to estimate the timeline of an asylum application.  Due to heavy backlogs at the asylum offices, some applicants may wait months (and sometimes years) to have their asylum interview scheduled.  However, some applicants are randomly chosen for much quicker processing times.  Please note, the length of time an applicant may have to wait has no real relationship to the strength or weakness of a claim.
    WARNING: In general, asylum seekers must file the asylum application within one year of their last arrival  to the U.S. If an applicant misses the one-year filing deadline, their asylum application will be denied unless they meet a legally recognized exception to the deadline.
    </p></div>

    </div>
    
    </div>
    
    <div style = 'background-color:#55D159'>
    <center><p id="1st" onclick = "$('#cool').toggleClass('dis')" style = 'color: white' >Green Card</p></center>

        <div style = 'background-color:green'>
    <div class = "container"><p class = 'dis' id = 'cool' style = 'color: white'>Asylum is an immigration benefit that allows certain foreign nationals who fear persecution to remain lawfully in the U.S. indefinitely. People who are granted asylum may apply for lawful permanent residence (a green card) one year after being granted asylum. With some exceptions, an asylum application generally must be filed within one year of the applicant’s last entry into the U.S.
    An asylum seeker must prove that he or she has a well-founded fear of persecution, that is, the mistreatment that is inflicted either directly by the government, or by individuals whom the government cannot or will not control, that happens frequently or over a long period of time based on one or more of five grounds:
    Race
    Religion
    Nationality
    Membership in a particular social group (Most LGBTQ individuals who apply for asylum qualify under this category)
    Political opinion
    In order to apply for asylum, you must fill out a Form I-589 (https://www.uscis.gov/i-589 , https://www.uscis.gov/system/files_force/files/form/i-589.pdf?download=1 , https://www.uscis.gov/system/files_force/files/form/i-589instr.pdf?download=1 ), Application for Asylum and for Withholding of Removal, within one year of your arrival to the United States. There is no fee to apply for asylum.
    Filing for asylum is a very serious decision and you should consult with an attorney before filing.  If you file on your own, please keep a copy of every piece of paper you submit for your records.  You should also send the application by certified mail (or through a delivery service such as FedEx or UPS) so that you are given a tracking number for the package.  This is sometimes the only way to prove that you filed for asylum on time. The asylum application consists of:
    Immigration Form I-589 A declaration (detailed personal statement by the applicant)
    Corroborating documents (medical reports, police reports, letters from witnesses, etc.) to back up the applicant’s story
    Country conditions documentation (human rights reports, newspaper articles, reports from expert witnesses) demonstrating how the government has persecuted you, either directly or indirectly
    You may include your spouse and children who are in the United States on your application at the time you file or at any time until a final decision is made on your case. To include your child on your application, the child must be under 21 and unmarried.
    After an application is filed, DHS will issue a receipt notice to let you know that the document was properly filed.  If you do not receive a receipt notice, your application may not have been properly filed.
    It can be very difficult to estimate the timeline of an asylum application.  Due to heavy backlogs at the asylum offices, some applicants may wait months (and sometimes years) to have their asylum interview scheduled.  However, some applicants are randomly chosen for much quicker processing times.  Please note, the length of time an applicant may have to wait has no real relationship to the strength or weakness of a claim.
    WARNING: In general, asylum seekers must file the asylum application within one year of their last arrival  to the U.S. If an applicant misses the one-year filing deadline, their asylum application will be denied unless they meet a legally recognized exception to the deadline.
    </p></div>

    </div>

         <center><p id="1st" onclick = "$('#cool').toggleClass('dis')" style = 'color: white' >Green Card</p></center>


    </div>


</div>
@endsection
