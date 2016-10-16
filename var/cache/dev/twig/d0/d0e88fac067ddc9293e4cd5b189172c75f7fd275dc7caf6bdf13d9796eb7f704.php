<?php

/* ::base.html.twig */
class __TwigTemplate_7a2f2d95223c043aa62cb0a1e1e226295a550e70246b38a27b6b2e05caeedbe6 extends Twig_Template
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
        $__internal_3de696b671bf918858965c3d61bfa64c35f3f3ba52de9d33d3ddd155e8205b9a = $this->env->getExtension("native_profiler");
        $__internal_3de696b671bf918858965c3d61bfa64c35f3f3ba52de9d33d3ddd155e8205b9a->enter($__internal_3de696b671bf918858965c3d61bfa64c35f3f3ba52de9d33d3ddd155e8205b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3de696b671bf918858965c3d61bfa64c35f3f3ba52de9d33d3ddd155e8205b9a->leave($__internal_3de696b671bf918858965c3d61bfa64c35f3f3ba52de9d33d3ddd155e8205b9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f917454c0de3bef5cc3a5318ebdf57d478b144ef4230dac2d6d30eacb7a82c0 = $this->env->getExtension("native_profiler");
        $__internal_3f917454c0de3bef5cc3a5318ebdf57d478b144ef4230dac2d6d30eacb7a82c0->enter($__internal_3f917454c0de3bef5cc3a5318ebdf57d478b144ef4230dac2d6d30eacb7a82c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f917454c0de3bef5cc3a5318ebdf57d478b144ef4230dac2d6d30eacb7a82c0->leave($__internal_3f917454c0de3bef5cc3a5318ebdf57d478b144ef4230dac2d6d30eacb7a82c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_027ff0224409c8d9de36ad0f42a9bc248a20d7e7a4fff1f1f5d3a116ef12fb28 = $this->env->getExtension("native_profiler");
        $__internal_027ff0224409c8d9de36ad0f42a9bc248a20d7e7a4fff1f1f5d3a116ef12fb28->enter($__internal_027ff0224409c8d9de36ad0f42a9bc248a20d7e7a4fff1f1f5d3a116ef12fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_027ff0224409c8d9de36ad0f42a9bc248a20d7e7a4fff1f1f5d3a116ef12fb28->leave($__internal_027ff0224409c8d9de36ad0f42a9bc248a20d7e7a4fff1f1f5d3a116ef12fb28_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8843f259db8a3d807444a6e9365691b5e60d8472c32728830daf628de9f43bbb = $this->env->getExtension("native_profiler");
        $__internal_8843f259db8a3d807444a6e9365691b5e60d8472c32728830daf628de9f43bbb->enter($__internal_8843f259db8a3d807444a6e9365691b5e60d8472c32728830daf628de9f43bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8843f259db8a3d807444a6e9365691b5e60d8472c32728830daf628de9f43bbb->leave($__internal_8843f259db8a3d807444a6e9365691b5e60d8472c32728830daf628de9f43bbb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e712f060e5ac5571add364621faa929e83aaf6604317df3dfd0b2dc6770517ea = $this->env->getExtension("native_profiler");
        $__internal_e712f060e5ac5571add364621faa929e83aaf6604317df3dfd0b2dc6770517ea->enter($__internal_e712f060e5ac5571add364621faa929e83aaf6604317df3dfd0b2dc6770517ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e712f060e5ac5571add364621faa929e83aaf6604317df3dfd0b2dc6770517ea->leave($__internal_e712f060e5ac5571add364621faa929e83aaf6604317df3dfd0b2dc6770517ea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
