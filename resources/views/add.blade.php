<form action="action.php" method="post" enctype="multipart/form-data">

        <lable align="right">FirstName:</lable>
                            <input type="text" name="firstname" required/><br>
                            <lable align="right">lastName:</lable>
                            <input type="text" name="lastname" required/><br>
                            <lable align="right">middleName:</lable>
                            <input type="text" name="middlename" required/><br>
                            <lable align="right">Gender:</lable>
                            <select id="cmbMake" name="Gender" >
                            <option>Male</option>
                            <option >Female</option>
                            </select><br>
                            <lable align="right">Position:</lable>
                            <select id="cmbMake" name="position" >
                            <option>Admin</option>
                            <option>Head</option>
                            <option>Teacher</option>
                            </select><br>
                            <lable align="right">Designation:</lable>
                            <input type="text" name="Designation" required/><br>
                            <lable align="right">school:</lable>
                            <input type="text" name="school" required/><br>
                            <lable align="right">Email:</lable>
                            <input type="text" name="email" required/><br>
                            <lable align="right">password:</lable>
                            <input type="password" name="password" required/><br>
                            <lable align="right">Image:</lable>  <br>                          
                            <input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
                            <input type="submit" name="register" value="submit" />
                                     

        </form>