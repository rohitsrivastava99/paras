<link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tb.css" rel="stylesheet" type="text/css" media="all" />
<?php
    include("header.php");
?>
<div class="tbleft">
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#a" data-toggle="tab">Description</a></li>
          <li><a href="#b" data-toggle="tab">One messege to One</a></li>
          <li><a href="#c" data-toggle="tab">One message to All</a></li>
          <li><a href="#d" data-toggle="tab">Calling</a></li>
          <li><a href="#e" data-toggle="tab">Messege Work Details</a></li>
          <li><a href="#f" data-toggle="tab">Calling Work Details </a></li>
          <li><a href="#g" data-toggle="tab">Sent Messege Details</a></li>
          <li><a href="#h" data-toggle="tab">Update Your Number </a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a">
            <h1>Schemes and plan</h1>
            <div class="sevpro">
                <div class="propic">
                     <center><img src="images/41.jpg"></center>
                 </div>
                 <div class="prologout">
                     <div class="btn btn-info">Edit Profile</div>
                     <div class="btn btn-danger">Log-Out</div>
                 </div>
            </div>
         </div>
         <div class="tab-pane" id="b">
            <h1>One 2 One Message</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="c">
             <h1>One 2 All Message</h1>
             <form class="tbfrm" enctype="multipart/form-data" action="upload.php" method="post">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                     <br/>
                     <input type="file" name="fileToUpload" id="fileToUpload">
                     <input type="submit" value="Upload Image">
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="d">
             <h1>Calling</h1>
             <form class="tbfrm" enctype="multipart/form-data" action="upload.php" method="post">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                     <br/>
                     <input type="file" name="fileToUpload2" id="fileToUpload2">
                    <input type="submit" value="Upload Image">

                 </div>
             </form>
         </div>
         <div class="tab-pane" id="e">
             <h1>Notification For Sms</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Succesfull Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Pending Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Failed Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="f">
             <h1>Notification For Calling</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Succesfull Calling" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Yet To Call" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Failed Calling" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="g">
             <h1>Send Message Detail One to One</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Message Status" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
             
         </div>
         <div class="tab-pane" id="h">
             <h1>Update Number</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
            </div>
            <input type="checkbox"><p>Searchable in search Bar.</p>
            <div class="input-group">
                    <button class="btn btn-defaut">Update Info</button>
            </div>
            </form>
             
         </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>