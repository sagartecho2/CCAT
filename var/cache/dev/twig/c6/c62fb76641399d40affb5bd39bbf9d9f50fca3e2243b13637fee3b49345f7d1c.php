<?php

/* event/create.html.twig */
class __TwigTemplate_3658db0cdce5e874a74de7aa4f24e999ad72afce31d5493ca03082c8e27b3658 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4931793ec3438ad0dc5cf35563c155b2db6ad726b4f94c5ee045abb95ab5944 = $this->env->getExtension("native_profiler");
        $__internal_f4931793ec3438ad0dc5cf35563c155b2db6ad726b4f94c5ee045abb95ab5944->enter($__internal_f4931793ec3438ad0dc5cf35563c155b2db6ad726b4f94c5ee045abb95ab5944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/create.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\">
        <div class=\"modal-content\">
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("event_create");
        echo "\" method=\"post\" id=\"eventForm\" >
          <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\">Add Table</h4>
          </div>
          <div class=\"modal-body modelbodyM30\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12 \">
                <div class=\"form-group\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Title", array()), 'row', array("attr" => array("class" => "sign-up-input margin_bottom10")));
        echo "
                  </div>
      </div>
              </div>

              <div class=\"row\" style=\"display:none\">

                  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "StartDate", array()), 'row');
        echo "
                  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "EndDate", array()), 'row');
        echo "
                  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TeacherId", array()), 'row');
        echo "
              </div>

              <div class=\"row\">
      <div class=\"col-xs-6 col-sm-6 col-lg-6 paddingR0 margin_bottom10\">
          <div class=\"form-group textbox_margin\">
                <label for=\"exampleInputPassword1\">Date</label>
                <div class=\"input-group date form_date \" data-date=\"\" data-date-format=\"dd MM yyyy\" data-link-field=\"dtp_input2\" data-link-format=\"yyyy-mm-dd\">
                      <input class=\"form-control\" size=\"16\" type=\"text\" value=\"\" readonly>
                    <!--  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-remove\"></span></span> -->
\t\t\t\t\t            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                </div>
\t\t\t\t            <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
            </div>
        </div>
      <div class=\"col-xs-6 col-sm-6 col-lg-6\">




          <div class=\"form-group textbox_margin\">
              <label for=\"exampleInputPassword1\">Time</label>
              <div class=\"input-group date form_time \" data-date=\"\" data-date-format=\"HH:ii P\" data-link-field=\"dtp_input3\" data-link-format=\"hh:ii P\">
                  <input class=\"form-control\" size=\"16\" type=\"text\" value=\"\" readonly>
                  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-time\"></span></span>
              </div>
              <input type=\"hidden\" id=\"dtp_input3\" value=\"\" /><br/>
              <input type=\"hidden\" id=\"date_input3\" value=\"\" /><br/>
            </div>


      </div>
      </div>
              <div class=\"addtable_info\" id=\"endDateDiv\" >
      <p>THIS EVENT IS OPEN FROM <span id=\"startDate\">MM/DD/YYYY</span> TO <span id=\"endDate\">MM/[DD+30]/YYYYY</span></p>
              </div>
        <div class=\"form-group text-center\" id=\"remainingTimeDiv\" >
              <div class=\"time_widget\">
        <label for=\"exampleInputPassword1\">Time Left</label>
              <span class=\"time_bg\" id=\"time\"></span>
              </div>
        </div>
              <hr>
              <div style=\"display:block\">
              <div class=\"row\">
              <div class=\"col-xs-12 col-sm-6 col-lg-6 paddingL0\">
      <div class=\"form-group\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Status", array()), 'row');
        echo "
        </div>
      </div>
              <div class=\"col-xs-6 col-sm-6 col-lg-6\">
      <div class=\"form-group\">
      <label for=\"exampleInputPassword1\" style=\"line-height: 27px;\">Priority</label>
              <div class=\"row margin_bottom10\">
              <div class=\"col-xs-4 col-sm-4 col-lg-4\">
      <div class=\"form-group\">
              ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IsPriority", array()), 'widget');
        echo "
              ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IsPriority", array()), 'label');
        echo "
      </div>
      </div>
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
      </div>
              </div>
      </div>
      </div>
              </div>
              <div class=\"row\">
      <div class=\"col-xs-12 col-sm-12 col-lg-12\">
      <!--<label for=\"exampleInputPassword1\"><div class=\"pull-left\">Event Details</div></label>-->
      ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Details", array()), 'row');
        echo "
        <!--<textarea class=\"sign-up-input sign-up-text_area  margin_bottom5\"></textarea>-->
      </div>
      </div>
              </div>

      </div>
              <div class=\"modal-footer footer_padding\">
               <button id=\"eventSubmit\" type=\"submit\" class=\"btn btn-primary btn-sm raised\">Save</button>
              <button type=\"button\" class=\"btn btn-primary btn-sm raised\" data-dismiss=\"modal\">Cancel</button>
        </div>
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
        </div>
        </div>
";
        
        $__internal_f4931793ec3438ad0dc5cf35563c155b2db6ad726b4f94c5ee045abb95ab5944->leave($__internal_f4931793ec3438ad0dc5cf35563c155b2db6ad726b4f94c5ee045abb95ab5944_prof);

    }

    public function getTemplateName()
    {
        return "event/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 101,  137 => 90,  122 => 78,  118 => 77,  106 => 68,  56 => 21,  52 => 20,  48 => 19,  38 => 12,  26 => 3,  22 => 1,);
    }
}
/* <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/* <form action="{{ path('event_create') }}" method="post" id="eventForm" >*/
/*           <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title">Add Table</h4>*/
/*           </div>*/
/*           <div class="modal-body modelbodyM30">*/
/*           <div class="row">*/
/*             <div class="col-xs-12 col-sm-12 col-lg-12 ">*/
/*                 <div class="form-group">*/
/*                     {{ form_row(form.Title, { 'attr': {'class': 'sign-up-input margin_bottom10'} }) }}*/
/*                   </div>*/
/*       </div>*/
/*               </div>*/
/* */
/*               <div class="row" style="display:none">*/
/* */
/*                   {{ form_row(form.StartDate) }}*/
/*                   {{ form_row(form.EndDate) }}*/
/*                   {{ form_row(form.TeacherId) }}*/
/*               </div>*/
/* */
/*               <div class="row">*/
/*       <div class="col-xs-6 col-sm-6 col-lg-6 paddingR0 margin_bottom10">*/
/*           <div class="form-group textbox_margin">*/
/*                 <label for="exampleInputPassword1">Date</label>*/
/*                 <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">*/
/*                       <input class="form-control" size="16" type="text" value="" readonly>*/
/*                     <!--  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> -->*/
/* 					            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*                 </div>*/
/* 				            <input type="hidden" id="dtp_input2" value="" /><br/>*/
/*             </div>*/
/*         </div>*/
/*       <div class="col-xs-6 col-sm-6 col-lg-6">*/
/* */
/* */
/* */
/* */
/*           <div class="form-group textbox_margin">*/
/*               <label for="exampleInputPassword1">Time</label>*/
/*               <div class="input-group date form_time " data-date="" data-date-format="HH:ii P" data-link-field="dtp_input3" data-link-format="hh:ii P">*/
/*                   <input class="form-control" size="16" type="text" value="" readonly>*/
/*                   <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>*/
/*               </div>*/
/*               <input type="hidden" id="dtp_input3" value="" /><br/>*/
/*               <input type="hidden" id="date_input3" value="" /><br/>*/
/*             </div>*/
/* */
/* */
/*       </div>*/
/*       </div>*/
/*               <div class="addtable_info" id="endDateDiv" >*/
/*       <p>THIS EVENT IS OPEN FROM <span id="startDate">MM/DD/YYYY</span> TO <span id="endDate">MM/[DD+30]/YYYYY</span></p>*/
/*               </div>*/
/*         <div class="form-group text-center" id="remainingTimeDiv" >*/
/*               <div class="time_widget">*/
/*         <label for="exampleInputPassword1">Time Left</label>*/
/*               <span class="time_bg" id="time"></span>*/
/*               </div>*/
/*         </div>*/
/*               <hr>*/
/*               <div style="display:block">*/
/*               <div class="row">*/
/*               <div class="col-xs-12 col-sm-6 col-lg-6 paddingL0">*/
/*       <div class="form-group">*/
/*             {{ form_row(form.Status) }}*/
/*         </div>*/
/*       </div>*/
/*               <div class="col-xs-6 col-sm-6 col-lg-6">*/
/*       <div class="form-group">*/
/*       <label for="exampleInputPassword1" style="line-height: 27px;">Priority</label>*/
/*               <div class="row margin_bottom10">*/
/*               <div class="col-xs-4 col-sm-4 col-lg-4">*/
/*       <div class="form-group">*/
/*               {{ form_widget(form.IsPriority) }}*/
/*               {{ form_label(form.IsPriority) }}*/
/*       </div>*/
/*       </div>*/
/*       <div class="col-xs-4 col-sm-4 col-lg-4">*/
/*       </div>*/
/*               </div>*/
/*       </div>*/
/*       </div>*/
/*               </div>*/
/*               <div class="row">*/
/*       <div class="col-xs-12 col-sm-12 col-lg-12">*/
/*       <!--<label for="exampleInputPassword1"><div class="pull-left">Event Details</div></label>-->*/
/*       {{ form_row(form.Details) }}*/
/*         <!--<textarea class="sign-up-input sign-up-text_area  margin_bottom5"></textarea>-->*/
/*       </div>*/
/*       </div>*/
/*               </div>*/
/* */
/*       </div>*/
/*               <div class="modal-footer footer_padding">*/
/*                <button id="eventSubmit" type="submit" class="btn btn-primary btn-sm raised">Save</button>*/
/*               <button type="button" class="btn btn-primary btn-sm raised" data-dismiss="modal">Cancel</button>*/
/*         </div>*/
/*         {{ form_rest(form) }}*/
/* </form>*/
/*         </div>*/
/*         </div>*/
/* */
