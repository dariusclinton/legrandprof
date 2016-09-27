<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_ae2f86d2da7f3855688e35610dbdaab25b08d785d882ceb888e1270fb1462ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed7b691146ff22da859d4c132c49265d02616d4fe37276661e198efe6a618f73 = $this->env->getExtension("native_profiler");
        $__internal_ed7b691146ff22da859d4c132c49265d02616d4fe37276661e198efe6a618f73->enter($__internal_ed7b691146ff22da859d4c132c49265d02616d4fe37276661e198efe6a618f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7b691146ff22da859d4c132c49265d02616d4fe37276661e198efe6a618f73->leave($__internal_ed7b691146ff22da859d4c132c49265d02616d4fe37276661e198efe6a618f73_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_37302640f895607457440e8eda579de629bcca8d986009076c3d9a04fb967793 = $this->env->getExtension("native_profiler");
        $__internal_37302640f895607457440e8eda579de629bcca8d986009076c3d9a04fb967793->enter($__internal_37302640f895607457440e8eda579de629bcca8d986009076c3d9a04fb967793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_37302640f895607457440e8eda579de629bcca8d986009076c3d9a04fb967793->leave($__internal_37302640f895607457440e8eda579de629bcca8d986009076c3d9a04fb967793_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
";
    }
}
