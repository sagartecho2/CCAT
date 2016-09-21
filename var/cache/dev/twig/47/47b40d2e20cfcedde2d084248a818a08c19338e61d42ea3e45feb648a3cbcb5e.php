<?php

/* base.html.twig */
class __TwigTemplate_f80ee745acb9f2eedc51d14f0509b908cb0a6bd607d4a5e015cce861b44230a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbdc55bf16b644f0e1b15ca48c34ef76f18cb6f9df4d22a3542f7b18db36ccaa = $this->env->getExtension("native_profiler");
        $__internal_fbdc55bf16b644f0e1b15ca48c34ef76f18cb6f9df4d22a3542f7b18db36ccaa->enter($__internal_fbdc55bf16b644f0e1b15ca48c34ef76f18cb6f9df4d22a3542f7b18db36ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </head>
    <body>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
    </body>
</html>
";
        
        $__internal_fbdc55bf16b644f0e1b15ca48c34ef76f18cb6f9df4d22a3542f7b18db36ccaa->leave($__internal_fbdc55bf16b644f0e1b15ca48c34ef76f18cb6f9df4d22a3542f7b18db36ccaa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_33fd4b7c98d23d4c0f218a9024c82b4c5a21b0812f0035ad5679ddbfb2b2073d = $this->env->getExtension("native_profiler");
        $__internal_33fd4b7c98d23d4c0f218a9024c82b4c5a21b0812f0035ad5679ddbfb2b2073d->enter($__internal_33fd4b7c98d23d4c0f218a9024c82b4c5a21b0812f0035ad5679ddbfb2b2073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_33fd4b7c98d23d4c0f218a9024c82b4c5a21b0812f0035ad5679ddbfb2b2073d->leave($__internal_33fd4b7c98d23d4c0f218a9024c82b4c5a21b0812f0035ad5679ddbfb2b2073d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f347fa31f6aa457b553c6725df19bbff8c6fe7a09c9c079bcfbde8dcf970a3f8 = $this->env->getExtension("native_profiler");
        $__internal_f347fa31f6aa457b553c6725df19bbff8c6fe7a09c9c079bcfbde8dcf970a3f8->enter($__internal_f347fa31f6aa457b553c6725df19bbff8c6fe7a09c9c079bcfbde8dcf970a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <!-- Bootstrap core CSS -->
          <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_f347fa31f6aa457b553c6725df19bbff8c6fe7a09c9c079bcfbde8dcf970a3f8->leave($__internal_f347fa31f6aa457b553c6725df19bbff8c6fe7a09c9c079bcfbde8dcf970a3f8_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f50e5710dd26a4e6a5f790695d2b23431e1ca7aee0023a1e25eda095e8ebfa3 = $this->env->getExtension("native_profiler");
        $__internal_9f50e5710dd26a4e6a5f790695d2b23431e1ca7aee0023a1e25eda095e8ebfa3->enter($__internal_9f50e5710dd26a4e6a5f790695d2b23431e1ca7aee0023a1e25eda095e8ebfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.0.js"), "html", null, true);
        echo "\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.0.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datetimepicker.pt-BR.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.printThis.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/client.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/form1.js"), "html", null, true);
        echo "\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/common.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_9f50e5710dd26a4e6a5f790695d2b23431e1ca7aee0023a1e25eda095e8ebfa3->leave($__internal_9f50e5710dd26a4e6a5f790695d2b23431e1ca7aee0023a1e25eda095e8ebfa3_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_2298fea06589edc12ab028f5d7744dde11a00139450facdcb1a049af19fd3f3c = $this->env->getExtension("native_profiler");
        $__internal_2298fea06589edc12ab028f5d7744dde11a00139450facdcb1a049af19fd3f3c->enter($__internal_2298fea06589edc12ab028f5d7744dde11a00139450facdcb1a049af19fd3f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2298fea06589edc12ab028f5d7744dde11a00139450facdcb1a049af19fd3f3c->leave($__internal_2298fea06589edc12ab028f5d7744dde11a00139450facdcb1a049af19fd3f3c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 42,  169 => 38,  165 => 37,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  115 => 18,  109 => 17,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  82 => 9,  79 => 8,  73 => 7,  61 => 6,  51 => 43,  49 => 42,  45 => 40,  42 => 17,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <!-- Bootstrap core CSS -->*/
/*           <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">*/
/*           <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*           <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">*/
/*           <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}" />*/
/*           <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}" />*/
/*           <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>*/
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*         <!-- Bootstrap core JavaScript*/
/*         ================================================== -->*/
/*         <!-- Placed at the end of the document so the pages load faster -->*/
/*         <script src="{{ asset('js/jquery-3.1.0.js') }}"></script>*/
/*         <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-3.1.0.js') }}"><\/script>')</script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap-datetimepicker.pt-BR.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.printThis.js') }}"></script>*/
/*         <script src="{{ asset('js/client.js') }}"></script>*/
/*         <script src="{{ asset('js/form1.js') }}"></script>*/
/*         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*         <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>*/
/*         <script src="{{ asset('js/common.js')}}"></script>*/
/*                 {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
