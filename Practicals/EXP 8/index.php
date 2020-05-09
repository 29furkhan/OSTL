<head>
	<title>
		Experiment 8
	</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.2/dist/js/uikit-icons.min.js"></script>
</head>

<body>
    <div style="margin-top:5%;display: flex;justify-content: center;">
            <div style="border: 1px solid black;width: 40%;height: 350px;overflow-y: auto;" class="uk-card uk-card-hover uk-card-body">
                <div id="msgdiv" style="display:none;" class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p id="msg"> </p>
                </div>
                    <center><h3 class="uk-card-title;">ADDITION</h3></center>
                    <hr style="border: 1px solid lightgrey;">
                    <br>
                    <form action="tmp.php" method="POST">
                        
                        <div style="display: flex;justify-content: space-around;">
                            <div>
                                <h4 class="uk-comment-title ">A</h4>	
                            </div>
                            <div class="">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input placeholder="Enter the Value of A" name="A" id="A" class="uk-input" type="text">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div style="display: flex;justify-content: space-around;">
                            <div>
                                <h4 class="uk-comment-title ">B</h4>	
                            </div>
                            <div class="">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                                    <input placeholder="Enter the Value of B" name="B" id="B" class="uk-input" type="text">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div style="display: flex;justify-content: space-around;">
	            		    <div class="">
                                <div class="uk-inline">
                                    <input id="submit" type="submit"  value="submit" class="uk-button uk-button-primary">
                                </div>
					        </div>

					    </div>
                        <br>

                        
                    </form>
            </div>
    </div>
</body>


