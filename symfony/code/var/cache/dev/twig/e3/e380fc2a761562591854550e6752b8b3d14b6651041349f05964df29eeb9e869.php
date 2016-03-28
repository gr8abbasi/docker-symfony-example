<?php

/* base.html.twig */
class __TwigTemplate_db68e84d8c985b69736ab56dc5ac92ea97a2fae3b3c7fc88978bc9f2dffdc094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c884b457a9a6c0c0ec5576d530ab3d48b31272f92743ebbb3d0f21c27c917222 = $this->env->getExtension("native_profiler");
        $__internal_c884b457a9a6c0c0ec5576d530ab3d48b31272f92743ebbb3d0f21c27c917222->enter($__internal_c884b457a9a6c0c0ec5576d530ab3d48b31272f92743ebbb3d0f21c27c917222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c884b457a9a6c0c0ec5576d530ab3d48b31272f92743ebbb3d0f21c27c917222->leave($__internal_c884b457a9a6c0c0ec5576d530ab3d48b31272f92743ebbb3d0f21c27c917222_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba8702511a20960fe58100b7711fc648bc9b699ec6ebca0c1c9c67936c98f5ce = $this->env->getExtension("native_profiler");
        $__internal_ba8702511a20960fe58100b7711fc648bc9b699ec6ebca0c1c9c67936c98f5ce->enter($__internal_ba8702511a20960fe58100b7711fc648bc9b699ec6ebca0c1c9c67936c98f5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba8702511a20960fe58100b7711fc648bc9b699ec6ebca0c1c9c67936c98f5ce->leave($__internal_ba8702511a20960fe58100b7711fc648bc9b699ec6ebca0c1c9c67936c98f5ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_171cbd35c0696feb0e94b503d951345e8928f08d15d49cf244d20fa990e35090 = $this->env->getExtension("native_profiler");
        $__internal_171cbd35c0696feb0e94b503d951345e8928f08d15d49cf244d20fa990e35090->enter($__internal_171cbd35c0696feb0e94b503d951345e8928f08d15d49cf244d20fa990e35090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_171cbd35c0696feb0e94b503d951345e8928f08d15d49cf244d20fa990e35090->leave($__internal_171cbd35c0696feb0e94b503d951345e8928f08d15d49cf244d20fa990e35090_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a89518f66a86ff1f7f8767db2f7d0b96276945ab8724261ce30ca21e8ce1d40 = $this->env->getExtension("native_profiler");
        $__internal_1a89518f66a86ff1f7f8767db2f7d0b96276945ab8724261ce30ca21e8ce1d40->enter($__internal_1a89518f66a86ff1f7f8767db2f7d0b96276945ab8724261ce30ca21e8ce1d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a89518f66a86ff1f7f8767db2f7d0b96276945ab8724261ce30ca21e8ce1d40->leave($__internal_1a89518f66a86ff1f7f8767db2f7d0b96276945ab8724261ce30ca21e8ce1d40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_666c7d0982a4c260fb86932c6b342582710bfb00503bab617067d2fb04856237 = $this->env->getExtension("native_profiler");
        $__internal_666c7d0982a4c260fb86932c6b342582710bfb00503bab617067d2fb04856237->enter($__internal_666c7d0982a4c260fb86932c6b342582710bfb00503bab617067d2fb04856237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_666c7d0982a4c260fb86932c6b342582710bfb00503bab617067d2fb04856237->leave($__internal_666c7d0982a4c260fb86932c6b342582710bfb00503bab617067d2fb04856237_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
