@extends('layout.main')
@section('active_technical_php')
    active
@endsection
@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Technical Test - PHP</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Tasks
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 1 : The value of the variable input is a string 1,2,3,4,5,6,7. How would you get the sum of  the integers contained inside input? .</div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 2 :  I have 3 field on the front end menu.
                                    <br>a. Email
                                    <br>b. Phone
                                    <br>c. Name
                                    <br>Please create sample validation code for three fields above.
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 3 : Suppose that you have to implement a class named Dragonball. This class must have an  attribute named ballCount (which starts from 0) and a method iFoundaBall.  When iFoundaBall is called, ballCount is increased by one. If the value of ballCount is  equal to seven, then the message You can ask your wish is printed, and ballCount is  reset to 0. How would you implement this class? </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 4 : What are the 3 scope levels available in PHP and how would you define them?  </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 5 : How does one prevent the following Warning ‘Warning: Cannot modify header  information – headers already sent’ and why does it occur in the first place?</div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 6 : What does the following code output?
                                    <br>$i = 016;
                                    <br>echo $i / 2;</div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 7 : What does MVC stand for and what does each component do? </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 8 : O T T F F S S E N …
                                    <br>Which is the next letter ?
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 9 : There is fisherman and hunter.
                                    They both say true except for the days when they always lie:
                                    The fisherman lies on Monday , Tuesday, and Wednesday. The hunter lies on Thursday,  Friday, and Saturday.
                                    Today they say, that they are both lying yesterday.
                                    Which day is today ?
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 10 : There is broken window in house.
                                    <br>Then I asked who broke the window :
                                    <br>Gregory : I was not !
                                    <br>April : I didn’t do it
                                    <br>August: April was.
                                    <br>June : August says the truth
                                    <br>(Two of them said the truth and two them said lie)
                                    <br>I ask them again :
                                    <br>Gregory : It was June
                                    <br>April : August didn’t do it
                                    <br>August : April didn’t do it!
                                    <br>June : Gregory was lying.
                                    <br>Who broke the window ? Please explain the logic.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-md-12 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Answers
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 1 :
                                    <pre>
                                        <code>
$numb = "1,2,3,4,5,6,7";
$sum = array_sum(explode(',', $numb) );
echo $sum;
                                        </code>
                                    </pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 2 :
                                    <pre>
                                        <code>
if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    echo 'email is required';
  }else{
   $email = $_POST['email'];
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'email not valid ';
   }else{
    echo htmlspecialchars($_POST['email']);
   }
  }

  if(empty($_POST['username'])){
    echo 'username is required';
  }else{
    $username = $_POST['username'];
    if(!preg_match('/^[a-zA-Z\s]+s/', $username)){
      echo 'username must be letters and space';
    }else{
      echo htmlspecialchars($_POST['username']);
    }
  }

  if(empty($_POST['name'])){
    echo 'name is required';
  }else{
    echo htmlspecialchars($_POST['name']);
  }

}
                                        </code>
                                    </pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 3 :
<pre>
    <code>
class Dragonball {

    public $ballCount = 0;

    public function iFoundaBall($loop) {

        for ($i = 1; $i < $loop; $i++) {
            $ball =  $this->ballCount + $i;
            echo 'Ball ' . $ball . "<br>";
            if ($ball == 7) {
                echo 'You can ask your wish';
                exit;
            }
        }

        $this->ballCount = 0;
    }
}

$dragonBall = new DragonBall;
echo $dragonBall->iFoundaBall(10);
    </code>
</pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 4 :
                                    <br>Private – Visible only in its own class
                                    <br>Public – Visible to any other code accessing the class
                                    <br>Protected – Visible only to classes parent(s) and classes that extend the current class
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 5 :

                                    <pre>
                                        <code>
No output before sending headers!
Functions that send/modify HTTP headers must be invoked before any output is made. summary ⇊ Otherwise the call fails:

Warning: Cannot modify header information - headers already sent (output started at script:line)

Some functions modifying the HTTP header are:

header / header_remove
session_start / session_regenerate_id
setcookie / setrawcookie
Output can be:

Unintentional:

- Whitespace before < ?php or after ?>
- The UTF-8 Byte Order Mark specifically
- Previous error messages or notices

Intentional:
- print, echo and other functions producing output
- Raw < html> sections prior < ?php code.

Why does it happen?
To understand why headers must be sent before output it's necessary to look at a typical HTTP response.
PHP scripts mainly generate HTML content, but also pass a set of HTTP/CGI headers to the webserver:
                                        </code>
                                    </pre>

                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 6 :
                                    <pre>
                                        <code>
7
                                        </code>
                                    </pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 7 :
<pre>
    <code>
The Model-View-Controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller.
Each of these components are built to handle specific development aspects of an application.

Model
The Model component corresponds to all the data-related logic that the user works with.
This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data.
For example, a Customer object will retrieve the customer information from the database, manipulate it and update it data back to the database or use it to render data.

View
The View component is used for all the UI logic of the application.
For example, the Customer view will include all the UI components such as text boxes, dropdowns, etc.
that the final user interacts with.

Controller
Controllers act as an interface between Model and View components to process all the business logic and incoming requests, manipulate data using the Model component and interact with the Views to render the final output.
For example, the Customer controller will handle all the interactions and inputs from the Customer View and update the database using the Customer Model.
The same controller will be used to view the Customer data.
    </code>
</pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 8 :
<pre>
    <code>
Answer : T
It is a sequence oof numbers...
O ne
T wo
T hree
F our
F ive
S ix
S even
E ight
N ine
T en
    </code>
</pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 9 :
                                    <pre>
                                        <code>
Thursday
                                        </code>
                                    </pre>
                                </div>
                                <hr>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">Task 10 :
<pre>
    <code>
If June or August told the truth, then so did the other, so April broke the window and Gregory is lying, so it was broken by April and Gregory, and maybe also an outsider. That's one possibility.
Otherwise, April and Gregory told the truth, because two did. Then it was broken by August and/or June and/or an outsider.

So, in sum,

it was broken by April and Gregory together, or by August and/or June. And maybe an outsider helped, too. Or indeed maybe an outsider did it alone.
The second batch of statements tells us nothing, since we don't know how many people are telling the truth that time.
    </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
