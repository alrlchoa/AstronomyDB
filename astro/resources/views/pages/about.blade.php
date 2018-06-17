@extends('main')

@section('title','- About')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1>About AstroDB</h1>
            <hr>
            <p> This is an astronomical database which includes two classes of users, Astronomer and the Researcher.
                Query CB:
                Astronomers are allowed to query celestial bodies in a number of ways, for instance, by entering certain coordinates for right ascension and declination. Results are shown on a new web-page displaying all of the celestial bodies at those coordinates in a table (Id, Name, Right-Ascension, Declination). From there, if the user clicks on the “View” button to the right of the celestial body, its details will be shown to the Astronomer on another web-page. These details include Right Ascension, Declination, Verification Status, Discoverer, Planet’s Orbital Period, Planet’s Type. All other celestial bodies this one is related to will also be displayed as well as the Publications it appears in (with publication details, Id, DOI, Date). In addition there are buttons to Edit and Delete the celestial body as well as Edit and View the publications. If the celestial body is a Star, Planet or Comet, there will be a button to Add Relation.
                In addition to coordinates, the other fields on which the Astronomers can query a celestial body are brightness threshold, subclass of celestial body (with the option to include unverified celestial bodies) and Astronomical Id.
                Query Users:
                Aside from accessing celestial bodies, Astronomers are able to query other users by means of username and institution and other publications via Digital Object Identifier (DOI). The query results for another user are displayed in a table with columns Id, First Name, Last Name, Username, Researcher Status (if the user is a Researcher, the institution they are a fellow-of is also displayed).

                CreateCB:
                When an astronomer believes they have discovered a new celestial body, from the home-page they can click the CreateCB tab. This will lead them to the web-page for creating a celestial body (and inserting it into the database) provided that its Right Ascension and Declination combination is unique. The user must provide Right Ascension, Declination, and Name for the celestial body. There is the option to indicate whether or not it is verified as well as classify it specifically, or indicate that the celestial body is Not Specified. For each subclass of the celestial body, there are specific input fields for which if the details are known, can be inputted. Furthermore, on the same page, there is the mandatory form for indicating the Instrument Used, with input fields of Date of Discovery, Location, Instrument Model ID, and Type.

                CreatePUB:
                From the home page, the user can also create a publication by clicking on the “CreatePUB” tab at the top. This will lead them to a page on which they can input the publications Date of publication and Digital Object Identifier (DOI).
                Researchers are able to do everything that an Astronomer can do, with the addition of some exclusive features. On the page for a celestial body, three more buttons are available to a Researcher -- “Verify”, “Edit Info” and “Delete”. If a Researcher clicks on “Verify”, then the Researcher will able to verify that there is a celestial body at the coordinates of interest. They will be brought to a separate page in which they must enter the DOI of a publication that verifies the celestial body. Researchers who click on the “Verify” button on an already verified celestial body can still use the button to input more publications. The “Edit Info” button turns all data fields pertaining to the celestial body’s attributes into text boxes. From here, the Researcher is able to edit attributes as long as the edits are valid. They can either save or cancel edits. When the user saves edits, the relevant tuples will be altered to reflect the new information. The “Delete” button will delete the celestial body and carry out any necessary actions following the deletion (for example, cascading, setting attributes in relations to null, etc).
            </p>
            </div>
        </div>
@endsection