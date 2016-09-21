<?php

/* event/griddata.html.twig */
class __TwigTemplate_740607af1da85c0033e5b256545ff0d340f1e1ce777fe1a95b079fd16a5aeb78 extends Twig_Template
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
        $__internal_40353b2db6caa1dd81a2fd7d6fb5689cacefca7694425e1989bde70ae75f8b85 = $this->env->getExtension("native_profiler");
        $__internal_40353b2db6caa1dd81a2fd7d6fb5689cacefca7694425e1989bde70ae75f8b85->enter($__internal_40353b2db6caa1dd81a2fd7d6fb5689cacefca7694425e1989bde70ae75f8b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event/griddata.html.twig"));

        // line 1
        echo "<tr id='event_display_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "' data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\" class=\"text-center print-hide\" onclick=\"selectRow(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo ")\">
  <td data-name=\"name\" class='print-hide print_checkbox'>
      <div class=\"checkbox_inline\">
          <input type=\"checkbox\" class=\"css-checkbox-multiselect checkbox-print\" id=\"checkbox-print_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\" name=\"checkbox-print\"><label class=\"label_chebox_multiselect \" for=\"checkbox-print_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\"></label>
      </div>
  </td>
  <td data-name=\"name\">
      <div class=\"checkbox_inline print-hide\">
          <input onclick=\"updateIsPriority(";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo ", event)\" type=\"checkbox\" ";
        if ((trim($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ispriority", array())) == "true")) {
            echo " checked=\"checked\"";
        }
        echo " class=\"css-checkbox-multiselect\" id=\"checkbox-priority-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\" name=\"checkbox-print\"><label class=\"label_chebox_multiselect \" for=\"checkbox-priority-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo "\"></label>
      </div>
      <div class=\"print-show hide\">";
        // line 11
        if ((trim($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ispriority", array())) == "true")) {
            echo "High";
        } else {
            echo " Low";
        }
        echo " </div>
  </td>
  <td data-name=\"mail\" id=\"priority\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "</td>
  <td data-name=\"desc\" id=\"start_date\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startdate", array()), "m/d/Y H:i"), "html", null, true);
        echo "</td>
  <td data-name=\"sel\" id=\"end_date\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "enddate", array()), "m/d/Y H:i"), "html", null, true);
        echo "</td>
  <td data-name=\"add\" id=\"status\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>
  <td data-name=\"del\" class='print-hide'><button class=\"btn-clear-sm b_edit_icon\" data-target=\"#mybox\" data-original-title=\"Edit\" data-placement=\"bottom\" data-toggle=\"tooltip\" type=\"button\" onclick=\"openEditEventPopUp(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo ", event)\"></button>
        <!--<button class=\"btn-clear-sm b_add_table_icon\" data-target=\"#mybox\" data-original-title=\"Add table\" data-placement=\"bottom\" data-toggle=\"tooltip\" type=\"button\"> </button>-->
  </td>
  <td data-name=\"del\" class='print-hide'>
        <button class=\"btn-clear-sm b_delete\" data-target=\"#mybox\" data-original-title=\"Delete\" data-placement=\"bottom\" data-toggle=\"tooltip\" type=\"button\" onclick=\"deleteEvent(";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo ", event)\"> </button>
  </td>
</tr>
";
        
        $__internal_40353b2db6caa1dd81a2fd7d6fb5689cacefca7694425e1989bde70ae75f8b85->leave($__internal_40353b2db6caa1dd81a2fd7d6fb5689cacefca7694425e1989bde70ae75f8b85_prof);

    }

    public function getTemplateName()
    {
        return "event/griddata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  56 => 11,  43 => 9,  33 => 4,  22 => 1,);
    }
}
/* <tr id='event_display_{{event.id}}' data-id="{{event.id}}" class="text-center print-hide" onclick="selectRow({{event.id}})">*/
/*   <td data-name="name" class='print-hide print_checkbox'>*/
/*       <div class="checkbox_inline">*/
/*           <input type="checkbox" class="css-checkbox-multiselect checkbox-print" id="checkbox-print_{{event.id}}" name="checkbox-print"><label class="label_chebox_multiselect " for="checkbox-print_{{event.id}}"></label>*/
/*       </div>*/
/*   </td>*/
/*   <td data-name="name">*/
/*       <div class="checkbox_inline print-hide">*/
/*           <input onclick="updateIsPriority({{event.id}}, event)" type="checkbox" {% if event.ispriority|trim == 'true' %} checked="checked"{% endif %} class="css-checkbox-multiselect" id="checkbox-priority-{{event.id}}" name="checkbox-print"><label class="label_chebox_multiselect " for="checkbox-priority-{{event.id}}"></label>*/
/*       </div>*/
/*       <div class="print-show hide">{% if event.ispriority|trim == 'true' %}High{%else%} Low{%endif%} </div>*/
/*   </td>*/
/*   <td data-name="mail" id="priority"> {{ event.title }}</td>*/
/*   <td data-name="desc" id="start_date">{{ event.startdate|date('m/d/Y H:i') }}</td>*/
/*   <td data-name="sel" id="end_date"> {{ event.enddate|date('m/d/Y H:i') }}</td>*/
/*   <td data-name="add" id="status">{{ status[event.status] }}</td>*/
/*   <td data-name="del" class='print-hide'><button class="btn-clear-sm b_edit_icon" data-target="#mybox" data-original-title="Edit" data-placement="bottom" data-toggle="tooltip" type="button" onclick="openEditEventPopUp({{ event.id }}, event)"></button>*/
/*         <!--<button class="btn-clear-sm b_add_table_icon" data-target="#mybox" data-original-title="Add table" data-placement="bottom" data-toggle="tooltip" type="button"> </button>-->*/
/*   </td>*/
/*   <td data-name="del" class='print-hide'>*/
/*         <button class="btn-clear-sm b_delete" data-target="#mybox" data-original-title="Delete" data-placement="bottom" data-toggle="tooltip" type="button" onclick="deleteEvent({{event.id}}, event)"> </button>*/
/*   </td>*/
/* </tr>*/
/* */
