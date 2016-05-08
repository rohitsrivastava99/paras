<link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tb.css" rel="stylesheet" type="text/css" media="all" />
<?php
    include("header.php");
?>
<div class="tbleft">
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#a" data-toggle="tab">One Page</a></li>
          <li><a href="#b" data-toggle="tab">Two Page</a></li>
          <li><a href="#c" data-toggle="tab">Three Page</a></li>
          <li><a href="#d" data-toggle="tab">Four Page</a></li>
          <li><a href="#e" data-toggle="tab">Five Page</a></li>
          <li><a href="#f" data-toggle="tab">Six Page</a></li>
          <li><a href="#g" data-toggle="tab">SevenPage</a></li>
          <li><a href="#h" data-toggle="tab">Eight Page</a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a">
            <h1>Your First Page Heading</h1>
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
            <h1>Your Second Page Heading</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Lorem ipsum dolor sit amet elit.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="c">
             <h1>Your third Page Heading</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Lorem ipsum dolor sit amet elit.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                     <button class="btn btn-defaut">Update Info</button>
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="d">
             <h1>Your Forth Page Heading</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Lorem ipsum dolor sit amet elit.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
                     <button class="btn btn-defaut">Update Info</button>
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="e">
             <h1>Your Fifth Page Heading</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="f">
             <h1>Your Six Page Heading</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="g">
             <h1>Your Seven Page Heading</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="input-group">
                     <button class="btn btn-defaut">Update Info</button>
                 </div>
             </form>
             
         </div>
         <div class="tab-pane" id="h">
             <h1>Your Eight Page Heading</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 200px; border-radius: 6px;"></textarea>
            </div>
            </form>
             
         </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>