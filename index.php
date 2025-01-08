

<html>
    <head>
        <!-- botstrap: CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Diamond - Projects</title>
    </head>
    <body>
        <style>
            .con{
                margin-top:3em;
            }
            .pod{
                height:150px;
                    background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #657f75, #a8eb125e);
                border-radius: 12px;
                margin:10px;
                padding:15px;
                 display: flex;
                  justify-content: center;
                  align-items: center;
            }
            
            .pod a{
                font-size:1.3em;
                color: white;
                text-decoration: none;
            }
            
            .title{
                text-align: center;
                
            }
        </style>
        <div id="template">
            <div class="project col-lg-4">
                <div class="pod">
                     <a class="name edit">Unknown</a>
                </div>
            </div>
        </div><!--template-->
    <div class="container-fluid con">
        <div class="row">
            <h3 class="title">PROJECTS</h3>
        </div>
        <div id="projectArea" class="row ">
            <div class="col-lg-4">
                <div class="pod">
                    <a class="" href="https://diamond.zionrobots.com.ng/projects.php?id=<?php echo time(); ?>">
                        NEW PROJECT
                    </a>
                </div>
            </div>
        </div>
    </div>  
        <script src="js/jquery.min.js"></script>
        <script>
             $(document).ready(function () {
                $("#template").hide();
                let num = localStorage.length;//number of projects
                for(let i = num-1; i >=0; i--){
                    
                    key = localStorage.key(i) //the current key
                    console.log(key)
                    if(key.indexOf("workspace-") ==0){
                         let pp =  localStorage.getItem(key)
                        console.log(pp)
                        pp = JSON.parse(pp)
                        let proj = $("#template .project").clone();
                        if(pp.projectName)proj.find(".name").text(pp.projectName)
                        proj.find(".edit").attr("href","https://diamond.zionrobots.com.ng/projects.php?id="+pp.storageId)
                        proj.appendTo("#projectArea")
                    }//end if contains workspace
                   
                    
                    //let pp =  JSON.parse(localStorage.getItem(localStorage.key(i)))
                    //proj.find(".name").text(pp.projectName)
                   // proj.appendTo("#projectArea")
                }//end for
          });//end doc ready
           
        </script>
       
         <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>