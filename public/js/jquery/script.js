$(document).ready(function(){let t="#formSendContact";$(t).submit(function(n){$("#btnSendContact").prop("disabled",!0),$("#default-button-contact").addClass("hidden"),$("#loading-button-contact").removeClass("hidden"),$("#loading-button-contact").addClass("inline-flex");let e={name:$(t).find("input[name=name]").val(),email:$(t).find("input[name=email]").val(),question:$(t).find("textarea[name=question]").val()};$.ajax({method:"POST",url:"{{ route('send.contact') }}",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},data:e,success:function(n){$("#btnSendContact").removeAttr("disabled"),$("#loading-button-contact").removeClass("inline-flex"),$("#loading-button-contact").addClass("hidden"),$("#default-button-contact").removeClass("hidden"),200==n.code&&n.success&&$(t).each(function(){this.reset()})}}),n.preventDefault()})});