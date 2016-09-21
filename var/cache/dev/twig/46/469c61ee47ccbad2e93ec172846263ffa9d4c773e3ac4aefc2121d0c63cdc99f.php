<?php

/* default/index.html.twig */
class __TwigTemplate_4b8bd112cc9486ba51e1f2ddbe2660160d1917f1992128c85d687daa6ef10fc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4facd5222273cb53dbb37011a7ce0c8f5cb001312ca33b7ebd82ea8d21c29b1d = $this->env->getExtension("native_profiler");
        $__internal_4facd5222273cb53dbb37011a7ce0c8f5cb001312ca33b7ebd82ea8d21c29b1d->enter($__internal_4facd5222273cb53dbb37011a7ce0c8f5cb001312ca33b7ebd82ea8d21c29b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4facd5222273cb53dbb37011a7ce0c8f5cb001312ca33b7ebd82ea8d21c29b1d->leave($__internal_4facd5222273cb53dbb37011a7ce0c8f5cb001312ca33b7ebd82ea8d21c29b1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c5cc8f9b6ac7851c51de97b7be6642f26019b0a5c82fd99dbc8cbe88bd931c = $this->env->getExtension("native_profiler");
        $__internal_35c5cc8f9b6ac7851c51de97b7be6642f26019b0a5c82fd99dbc8cbe88bd931c->enter($__internal_35c5cc8f9b6ac7851c51de97b7be6642f26019b0a5c82fd99dbc8cbe88bd931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Header -->
<section class=\"sectionheader\">
  <div class=\"container\">
      <h2 class=\"logotitle\">Client Capability Assessment Test02</h2>
  </div>
</section>
<!-- ----------------CONTINER START ----------------------->

<section class=\"sectionbody\">

<form id=\"formOne\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("transaction");
        echo "\" method=\"post\" id=\"projectAssignmentForm\" autocomplete=\"off\">
<div class=\"container\">

  <div class=\"padding20\">
          <div class=\"bgcolor\">
            <div class=\"topsection outerpadding verticalrightborder\">
                  <div class=\"row \">
          <div class=\"col-xs-12 col-sm-6 col-lg-6\">
              <div class=\"form-group\">
              ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "AssignedBy", array()), 'label');
        echo "
              ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "AssignedBy", array()), 'widget');
        echo "
              <div class=\"form_alert project_assignment_form_AssignedBy_em\">

              </div>
              </div>
          </div>
          <div class=\"col-xs-12 col-sm-6 col-lg-6\">
          <div class=\"registeredname\">
          Check your registered name here <a href=\"#\">www.myprofile.com</a>
          </div>
          </div>
          </div>
                  <div class=\"row\">
                      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
                          <div class=\"form-group\">
                          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TeacherID", array()), 'label');
        echo "
                          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TeacherID", array()), 'widget');
        echo "
                          <div class=\"form_alert project_assignment_form_TeacherID_em\">

                          </div>
                          </div>
                      </div>
                      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
                          <div class=\"registeredname\">
                          <a type=\"button\"  id=\"add_members\" href=\"#\" data-toggle=\"modal\" data-target=\"#addmember\" style=\"display:none\">Add/Look up members</a>
                          </div>
                      </div>
                  </div>
          </div>
          </div>
<div class=\"bgcolor\">
<fieldset>
<legend>Project Selection</legend>
<div class=\"row\">
<!-- left -->
  <div class=\"col-xs-12 col-sm-6 col-lg-6\">
          <div class=\"form-group\">
          ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProjTypeID", array()), 'label');
        echo "
          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProjTypeID", array()), 'widget');
        echo "
          <div class=\"form_alert project_assignment_form_ProjTypeID_em\">

          </div>
                                      </div>
        <div class=\"form-group\">
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProjTitleID", array()), 'label');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ProjTitleID", array()), 'widget');
        echo "
                                      </div>
              </div>
<!-- right -->

  <div class=\"col-xs-12 col-sm-6 col-lg-6\">
           <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-lg-12\">
                          <div class=\"image_div\">
                          <div class=\"pull-left\"> <label for=\"exampleInputPassword1\">Image Relevant to Topic</label></div>
                          <div class=\"download_btn\">
                            <a id=\"downloadImage\">
                              <button type=\"button\" class=\"btn-clear-sm b_download_icon\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-original-title=\"download\"  data-toggle=\"modal\" data-target=\"#mybox\"> </button>
                            </a>
                          </div>
                          </div>
                          <div class=\"relavent_img_thumbnail\">
                              <img id=\"img_details\" src=\"images/upload_image.png\" alt=\"\"/>

            </div>
                              <div class=\" relavent_img_thumbnail_content\"><p class=\"upload_img_content\">If you would like to change the default image to an image of your choice, please click the upload button given below</p>
                              <input id=\"uploadFile\" type=\"hidden\" style=\"cursor: not-allowed;\" placeholder=\"Choose File\" disabled=\" \" />
                              <div class=\"fileUpload btn btn-primary\"> <span>Upload</span>
                              <!--- <form enctype=\"multipart/form-data\" id=\"upload_form\">  -->
                              <input id=\"uploadBtn\" name=\"img\" type=\"file\" class=\"upload\" />
                              <!--- </form> -->
                              </div>
                              </div>

    </div>
    <div class=\"col-xs-12 col-sm-6 col-lg-6\"><div class=\"registeredname\"></div></div>
                  </div>
              </div>
      </div>
      </fieldset>
</div>
</div>
";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Logo", array()), 'widget');
        echo "
  <div class=\"row margin_top15 margin_bottom10\">
      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
          <input type=\"radio\" name=\"radiog_dark\" id=\"radio4\" class=\"css-checkbox\" checked=\"checked\" /><label for=\"radio4\" class=\"css-label radGroup1 radGroup2\"> Add Description</label>
      </div>
      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
          <input type=\"radio\" name=\"radiog_dark\" id=\"radio6\" class=\"css-checkbox\" /><label for=\"radio6\" class=\"css-label radGroup1 radGroup2 margin_left70\">Skip Description</label>
      </div>
  </div>
  <div class=\"row\" id=\"radio_desc\">
     <div class=\"col-xs-12 col-sm-12 col-lg-12\">
     ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "LogoDesc", array()), 'label');
        echo "
     ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "LogoDesc", array()), 'widget');
        echo "
     <div class=\"form_alert project_assignment_form_LogoDesc_em\">

     </div>
  </div>
  </div>
  <div class=\"row\">
          <div class=\"col-xs-12 col-sm-3 col-lg-2\">
              <div class=\"form-group\"><label for=\"exampleInputPassword1\">Age Group of Members</label> </div>
          </div>
          <div class=\"col-xs-12 col-sm-9 col-lg-10\">
              <div class=\" form-group paddingB5\">
              <div class=\"checkbox_inline\">
              ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IsChild", array()), 'widget');
        echo "
              ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IsChild", array()), 'label');
        echo "
              </div>
              <div class=\"\" id=\"mentorCheckboxDiv\" style=\"display:none\">
              ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardian", array()), 'widget');
        echo "
              ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardian", array()), 'label');
        echo "
               </div>
                </div>
          </div>
  </div>
  <div class=\"row\" id=\"mentor\" style=\"display:none\">
          <div class=\"col-xs-12 col-sm-3 col-lg-2\"></div>
              <div class=\"col-xs-12 col-sm-9 col-lg-10\">
        <p class=\"paddingTL15\">“Note: <i>A Guardian/ Mentor is Assigned to Age Group below 10 Years to Assist In Project research, and Presentation</i>”</p>
              </div>
  </div>
<hr>
<!-- 3-->
<legend>Project Selection</legend>
<div class=\"row\">
      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
              <div class=\"form-group\">
                  <label>Choose Any Three Options from the list below</label>
                      <label for=\"exampleInputPassword1\">Topic</label>
                          <select class=\"\" id=\"keywords\"  multiple=\"multiple\">
                                  <option value=\"1\">Topic 1</option>
                                  <option value=\"2\">Topic 2</option>
                                  <option value=\"3\">Topic 3</option>
                          </select>
                          <div class=\"form_alert project_dropdown_error project_assignment_form_EventTitle_em\">
                            This alert box could indicate a dangerous or potentially negative action.
                          </div>
              </div>
      </div>
</div>
<hr>
<!-- 4-->
<div class=\"row \">
      <div class=\"col-xs-12 col-sm-6 col-lg-6\">
          <div class=\"form-group\">
          ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "EventTitle", array()), 'label');
        echo "
          ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "EventTitle", array()), 'widget');
        echo "
          </div>
      </div>
</div>
<legend>Project Details
    <div class=\"pull-right \" style=\"margin-top:-12px;\">
      <button id=\"createEventButton\" class=\"btn btn-primary btn-lg raised B_createNew\" type=\"button\"  data-toggle=\"modal\"  data-target=\"#myModal\" onclick=\"openCreateEventPopUp()\" style=\"display:none\"> Create Event </button>
      <button id=\"editEventButton\" class=\"btn btn-primary btn-lg raised B_createNew\" type=\"button\"  onclick=\"openEditEventPopUp()\" style=\"display:none\"> Edit </button>
      <img type=\"button\" id=\"print\" src=\"images/print_icon.png\">

      </div>
</legend>
<div class=\"pull-right\">
    <div class=\"clear\">
      <div class=\"row\">
      <div class=\"col-xs-12 col-sm-12 col-lg-12\">
              <div class=\"form-group\">
                  <div class=\"pull-left\"><label for=\"exampleInputPassword1\" class=\"label_proj\"></label></div>
               </div>
       </div>
       </div>
      </div>
</div>
<!-- table start-->
  <div class=\"row clearfix table_mob_view\">
    <div class=\"col-md-12 table-responsive\">
    <table class=\"table table-bordered table-hover table-sortable printtable\" id=\"tab_logic\">
      <thead>
        <tr >
          <th class=\"text-center print-hide\"> Click to print</th>
          <th class=\"text-center\">Priority</th>
          <th class=\"text-center\">Title</th>
          <th class=\"text-center\">Start Date</th>
            <th class=\"text-center\">End Date</th>
                      <th class=\"text-center\">Status</th>
                       <th class=\"text-center print-hide\" >Add/Edit</th>
                      <th class=\"text-center print-hide\">Delete</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
<!--<p>TO ADD DATA TO THE FORM PLEASE CLICK ON THE ADD/EDIT BUTTON IN THE COLUMN ABOVE :</p>-->
</div>
<!-- table end-->
<div id=\"project_success\" class=\"alert alert-success\" style=\" margin-top:20px; display:none\" >

</div>
<div class=\"col-xs-12\">
<div class=\"pull-right margin_bottom10 btn_margin\">
<button id=\"formSubmit\" type=\"submit\" class=\"btn btn-primary btn-sm raised\">Submit</button>
<button id=\"formReset\" type=\"reset\" onclick=\"window.location.reload()\" class=\"btn btn-primary btn-sm raised\">Reset</button>
</div>
</div>
              
</div>
";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>

</section>
<!-- ----------------CONTINER  END---------------------- -->
<!-- Footer -->
<footer class=\"footer\">
<div class=\"container footerarea\">© 2016 Client Capability Assessment Test02</div>
</footer>
<!------------------------------------------------------------------------------------!>
<!-- Modal add memeber -->
<div id=\"addmember\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Add Member</h4>
          </div>
        <div class=\"modal-body\">
          <div class=\"row\">
            <div class=\"col-xs-5 col-sm-5 col-lg-5\">
            <div class=\"add_member_heading\">MEMBERS LIST</div>
            <div class=\"add_member_div\">
                    <div class=\"add_member_content\">
                      <ul id=\"assigned_members\">

                      </ul>
          </div>
                  </div>
          </div>
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
            <div class=\"add_member_btn\">
              <ul>
              <li><button id=\"move_right\" type=\"button\"><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span></button></li>
              <li><button id=\"move_left\" type=\"button\"><span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span></button></li>
              <li><button id=\"moveall_left\" type=\"button\"><span class=\"glyphicon glyphicon-backward\" aria-hidden=\"true\"></span></button></li>
              <li><button id=\"moveall_right\" type=\"button\"><span class=\"glyphicon glyphicon-forward\" aria-hidden=\"true\"></span></button></li>
              </ul>
            </div>
        </div>
        <div class=\"col-xs-5 col-sm-5 col-lg-5\">
            <div class=\"add_member_heading\">UNASSIGNED MEMBERS</div>
            <div class=\"add_member_div\">
            <div class=\"add_member_content\">
            <ul id=\"unassigned_member\">
            </ul>
            </div>
        </div>
        </div>
        </div>
      </div>
          <div class=\"modal-footer\">
          <button  id=\"save_assign\" type=\"button\" class=\"btn btn-primary btn-sm raised\" data-dismiss=\"modal\">Done</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal add memeber end -->
<!-- Modal -->
<div class=\"modal\" id=\"mybox\">

              </div>
<!-- model end -->

";
        
        $__internal_35c5cc8f9b6ac7851c51de97b7be6642f26019b0a5c82fd99dbc8cbe88bd931c->leave($__internal_35c5cc8f9b6ac7851c51de97b7be6642f26019b0a5c82fd99dbc8cbe88bd931c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 230,  261 => 172,  257 => 171,  219 => 136,  215 => 135,  209 => 132,  205 => 131,  189 => 118,  185 => 117,  171 => 106,  131 => 69,  127 => 68,  118 => 62,  114 => 61,  90 => 40,  86 => 39,  68 => 24,  64 => 23,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Header -->*/
/* <section class="sectionheader">*/
/*   <div class="container">*/
/*       <h2 class="logotitle">Client Capability Assessment Test02</h2>*/
/*   </div>*/
/* </section>*/
/* <!-- ----------------CONTINER START ----------------------->*/
/* */
/* <section class="sectionbody">*/
/* */
/* <form id="formOne" action="{{ path('transaction') }}" method="post" id="projectAssignmentForm" autocomplete="off">*/
/* <div class="container">*/
/* */
/*   <div class="padding20">*/
/*           <div class="bgcolor">*/
/*             <div class="topsection outerpadding verticalrightborder">*/
/*                   <div class="row ">*/
/*           <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*               <div class="form-group">*/
/*               {{ form_label(form.AssignedBy) }}*/
/*               {{ form_widget(form.AssignedBy) }}*/
/*               <div class="form_alert project_assignment_form_AssignedBy_em">*/
/* */
/*               </div>*/
/*               </div>*/
/*           </div>*/
/*           <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*           <div class="registeredname">*/
/*           Check your registered name here <a href="#">www.myprofile.com</a>*/
/*           </div>*/
/*           </div>*/
/*           </div>*/
/*                   <div class="row">*/
/*                       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*                           <div class="form-group">*/
/*                           {{ form_label(form.TeacherID) }}*/
/*                           {{ form_widget(form.TeacherID) }}*/
/*                           <div class="form_alert project_assignment_form_TeacherID_em">*/
/* */
/*                           </div>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*                           <div class="registeredname">*/
/*                           <a type="button"  id="add_members" href="#" data-toggle="modal" data-target="#addmember" style="display:none">Add/Look up members</a>*/
/*                           </div>*/
/*                       </div>*/
/*                   </div>*/
/*           </div>*/
/*           </div>*/
/* <div class="bgcolor">*/
/* <fieldset>*/
/* <legend>Project Selection</legend>*/
/* <div class="row">*/
/* <!-- left -->*/
/*   <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*           <div class="form-group">*/
/*           {{ form_label(form.ProjTypeID) }}*/
/*           {{ form_widget(form.ProjTypeID) }}*/
/*           <div class="form_alert project_assignment_form_ProjTypeID_em">*/
/* */
/*           </div>*/
/*                                       </div>*/
/*         <div class="form-group">*/
/*         {{ form_label(form.ProjTitleID) }}*/
/*         {{ form_widget(form.ProjTitleID) }}*/
/*                                       </div>*/
/*               </div>*/
/* <!-- right -->*/
/* */
/*   <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*            <div class="row">*/
/*         <div class="col-xs-12 col-sm-12 col-lg-12">*/
/*                           <div class="image_div">*/
/*                           <div class="pull-left"> <label for="exampleInputPassword1">Image Relevant to Topic</label></div>*/
/*                           <div class="download_btn">*/
/*                             <a id="downloadImage">*/
/*                               <button type="button" class="btn-clear-sm b_download_icon" data-toggle="tooltip" data-placement="bottom" data-original-title="download"  data-toggle="modal" data-target="#mybox"> </button>*/
/*                             </a>*/
/*                           </div>*/
/*                           </div>*/
/*                           <div class="relavent_img_thumbnail">*/
/*                               <img id="img_details" src="images/upload_image.png" alt=""/>*/
/* */
/*             </div>*/
/*                               <div class=" relavent_img_thumbnail_content"><p class="upload_img_content">If you would like to change the default image to an image of your choice, please click the upload button given below</p>*/
/*                               <input id="uploadFile" type="hidden" style="cursor: not-allowed;" placeholder="Choose File" disabled=" " />*/
/*                               <div class="fileUpload btn btn-primary"> <span>Upload</span>*/
/*                               <!--- <form enctype="multipart/form-data" id="upload_form">  -->*/
/*                               <input id="uploadBtn" name="img" type="file" class="upload" />*/
/*                               <!--- </form> -->*/
/*                               </div>*/
/*                               </div>*/
/* */
/*     </div>*/
/*     <div class="col-xs-12 col-sm-6 col-lg-6"><div class="registeredname"></div></div>*/
/*                   </div>*/
/*               </div>*/
/*       </div>*/
/*       </fieldset>*/
/* </div>*/
/* </div>*/
/* {{ form_widget(form.Logo) }}*/
/*   <div class="row margin_top15 margin_bottom10">*/
/*       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*           <input type="radio" name="radiog_dark" id="radio4" class="css-checkbox" checked="checked" /><label for="radio4" class="css-label radGroup1 radGroup2"> Add Description</label>*/
/*       </div>*/
/*       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*           <input type="radio" name="radiog_dark" id="radio6" class="css-checkbox" /><label for="radio6" class="css-label radGroup1 radGroup2 margin_left70">Skip Description</label>*/
/*       </div>*/
/*   </div>*/
/*   <div class="row" id="radio_desc">*/
/*      <div class="col-xs-12 col-sm-12 col-lg-12">*/
/*      {{ form_label(form.LogoDesc) }}*/
/*      {{ form_widget(form.LogoDesc) }}*/
/*      <div class="form_alert project_assignment_form_LogoDesc_em">*/
/* */
/*      </div>*/
/*   </div>*/
/*   </div>*/
/*   <div class="row">*/
/*           <div class="col-xs-12 col-sm-3 col-lg-2">*/
/*               <div class="form-group"><label for="exampleInputPassword1">Age Group of Members</label> </div>*/
/*           </div>*/
/*           <div class="col-xs-12 col-sm-9 col-lg-10">*/
/*               <div class=" form-group paddingB5">*/
/*               <div class="checkbox_inline">*/
/*               {{ form_widget(form.IsChild) }}*/
/*               {{ form_label(form.IsChild) }}*/
/*               </div>*/
/*               <div class="" id="mentorCheckboxDiv" style="display:none">*/
/*               {{ form_widget(form.Guardian) }}*/
/*               {{ form_label(form.Guardian) }}*/
/*                </div>*/
/*                 </div>*/
/*           </div>*/
/*   </div>*/
/*   <div class="row" id="mentor" style="display:none">*/
/*           <div class="col-xs-12 col-sm-3 col-lg-2"></div>*/
/*               <div class="col-xs-12 col-sm-9 col-lg-10">*/
/*         <p class="paddingTL15">“Note: <i>A Guardian/ Mentor is Assigned to Age Group below 10 Years to Assist In Project research, and Presentation</i>”</p>*/
/*               </div>*/
/*   </div>*/
/* <hr>*/
/* <!-- 3-->*/
/* <legend>Project Selection</legend>*/
/* <div class="row">*/
/*       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*               <div class="form-group">*/
/*                   <label>Choose Any Three Options from the list below</label>*/
/*                       <label for="exampleInputPassword1">Topic</label>*/
/*                           <select class="" id="keywords"  multiple="multiple">*/
/*                                   <option value="1">Topic 1</option>*/
/*                                   <option value="2">Topic 2</option>*/
/*                                   <option value="3">Topic 3</option>*/
/*                           </select>*/
/*                           <div class="form_alert project_dropdown_error project_assignment_form_EventTitle_em">*/
/*                             This alert box could indicate a dangerous or potentially negative action.*/
/*                           </div>*/
/*               </div>*/
/*       </div>*/
/* </div>*/
/* <hr>*/
/* <!-- 4-->*/
/* <div class="row ">*/
/*       <div class="col-xs-12 col-sm-6 col-lg-6">*/
/*           <div class="form-group">*/
/*           {{ form_label(form.EventTitle) }}*/
/*           {{ form_widget(form.EventTitle) }}*/
/*           </div>*/
/*       </div>*/
/* </div>*/
/* <legend>Project Details*/
/*     <div class="pull-right " style="margin-top:-12px;">*/
/*       <button id="createEventButton" class="btn btn-primary btn-lg raised B_createNew" type="button"  data-toggle="modal"  data-target="#myModal" onclick="openCreateEventPopUp()" style="display:none"> Create Event </button>*/
/*       <button id="editEventButton" class="btn btn-primary btn-lg raised B_createNew" type="button"  onclick="openEditEventPopUp()" style="display:none"> Edit </button>*/
/*       <img type="button" id="print" src="images/print_icon.png">*/
/* */
/*       </div>*/
/* </legend>*/
/* <div class="pull-right">*/
/*     <div class="clear">*/
/*       <div class="row">*/
/*       <div class="col-xs-12 col-sm-12 col-lg-12">*/
/*               <div class="form-group">*/
/*                   <div class="pull-left"><label for="exampleInputPassword1" class="label_proj"></label></div>*/
/*                </div>*/
/*        </div>*/
/*        </div>*/
/*       </div>*/
/* </div>*/
/* <!-- table start-->*/
/*   <div class="row clearfix table_mob_view">*/
/*     <div class="col-md-12 table-responsive">*/
/*     <table class="table table-bordered table-hover table-sortable printtable" id="tab_logic">*/
/*       <thead>*/
/*         <tr >*/
/*           <th class="text-center print-hide"> Click to print</th>*/
/*           <th class="text-center">Priority</th>*/
/*           <th class="text-center">Title</th>*/
/*           <th class="text-center">Start Date</th>*/
/*             <th class="text-center">End Date</th>*/
/*                       <th class="text-center">Status</th>*/
/*                        <th class="text-center print-hide" >Add/Edit</th>*/
/*                       <th class="text-center print-hide">Delete</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/* */
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* <!--<p>TO ADD DATA TO THE FORM PLEASE CLICK ON THE ADD/EDIT BUTTON IN THE COLUMN ABOVE :</p>-->*/
/* </div>*/
/* <!-- table end-->*/
/* <div id="project_success" class="alert alert-success" style=" margin-top:20px; display:none" >*/
/* */
/* </div>*/
/* <div class="col-xs-12">*/
/* <div class="pull-right margin_bottom10 btn_margin">*/
/* <button id="formSubmit" type="submit" class="btn btn-primary btn-sm raised">Submit</button>*/
/* <button id="formReset" type="reset" onclick="window.location.reload()" class="btn btn-primary btn-sm raised">Reset</button>*/
/* </div>*/
/* </div>*/
/*               */
/* </div>*/
/* {{ form_rest(form) }}*/
/* </form>*/
/* */
/* </section>*/
/* <!-- ----------------CONTINER  END---------------------- -->*/
/* <!-- Footer -->*/
/* <footer class="footer">*/
/* <div class="container footerarea">© 2016 Client Capability Assessment Test02</div>*/
/* </footer>*/
/* <!------------------------------------------------------------------------------------!>*/
/* <!-- Modal add memeber -->*/
/* <div id="addmember" class="modal fade" role="dialog">*/
/*     <div class="modal-dialog">*/
/*       <!-- Modal content-->*/
/*       <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*             <h4 class="modal-title">Add Member</h4>*/
/*           </div>*/
/*         <div class="modal-body">*/
/*           <div class="row">*/
/*             <div class="col-xs-5 col-sm-5 col-lg-5">*/
/*             <div class="add_member_heading">MEMBERS LIST</div>*/
/*             <div class="add_member_div">*/
/*                     <div class="add_member_content">*/
/*                       <ul id="assigned_members">*/
/* */
/*                       </ul>*/
/*           </div>*/
/*                   </div>*/
/*           </div>*/
/*         <div class="col-xs-2 col-sm-2 col-lg-2">*/
/*             <div class="add_member_btn">*/
/*               <ul>*/
/*               <li><button id="move_right" type="button"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button></li>*/
/*               <li><button id="move_left" type="button"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button></li>*/
/*               <li><button id="moveall_left" type="button"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></button></li>*/
/*               <li><button id="moveall_right" type="button"><span class="glyphicon glyphicon-forward" aria-hidden="true"></span></button></li>*/
/*               </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-xs-5 col-sm-5 col-lg-5">*/
/*             <div class="add_member_heading">UNASSIGNED MEMBERS</div>*/
/*             <div class="add_member_div">*/
/*             <div class="add_member_content">*/
/*             <ul id="unassigned_member">*/
/*             </ul>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*       </div>*/
/*           <div class="modal-footer">*/
/*           <button  id="save_assign" type="button" class="btn btn-primary btn-sm raised" data-dismiss="modal">Done</button>*/
/*         </div>*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <!-- Modal add memeber end -->*/
/* <!-- Modal -->*/
/* <div class="modal" id="mybox">*/
/* */
/*               </div>*/
/* <!-- model end -->*/
/* */
/* {% endblock %}*/
/* */
