$(document).on("click",".edit-profile",(function(e){$("#editProfileUserId").val(loggedInUser.id),$("#pfName").val(loggedInUser.name),$("#pfEmail").val(loggedInUser.email),$("#EditProfileModal").appendTo("body").modal("show")})),$(document).on("change","#pfImage",(function(){var e=$(this).val().split(".").pop().toLowerCase();-1==$.inArray(e,["gif","png","jpg","jpeg"])?($(this).val(""),$("#editProfileValidationErrorsBox").html("The profile image must be a file of type: jpeg, jpg, png.").show()):displayPhoto(this,"#edit_preview_photo")})),window.displayPhoto=function(e,o){var t=!0;if(e.files&&e.files[0]){var i=new FileReader;i.onload=function(e){var i=new Image;i.src=e.target.result,i.onload=function(){$(o).attr("src",e.target.result),t=!0}},t&&(i.readAsDataURL(e.files[0]),$(o).show())}},$(document).on("submit","#editProfileForm",(function(e){e.preventDefault();var o=$("#editProfileUserId").val(),t=jQuery(this).find("#btnPrEditSave");t.button("loading"),$.ajax({url:usersUrl+"/"+o,type:"post",data:new FormData($(this)[0]),processData:!1,contentType:!1,success:function(e){e.success&&($("#EditProfileModal").modal("hide"),setTimeout((function(){location.reload()}),1500))},error:function(e){console.log(e)},complete:function(){t.button("reset")}})}));