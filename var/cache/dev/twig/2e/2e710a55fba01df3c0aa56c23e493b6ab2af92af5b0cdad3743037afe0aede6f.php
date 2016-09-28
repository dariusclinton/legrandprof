<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_21679a617bdcdc710b2546a356a58ec3e0c17e8d83f0ded382ac99de162fd220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_510a2413b5b7f18a0e49d2d096939de9e7ede2e80d713222603940a330534469 = $this->env->getExtension("native_profiler");
        $__internal_510a2413b5b7f18a0e49d2d096939de9e7ede2e80d713222603940a330534469->enter($__internal_510a2413b5b7f18a0e49d2d096939de9e7ede2e80d713222603940a330534469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_510a2413b5b7f18a0e49d2d096939de9e7ede2e80d713222603940a330534469->leave($__internal_510a2413b5b7f18a0e49d2d096939de9e7ede2e80d713222603940a330534469_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0b28edbdfc58e25843b3888b3c65b703e8be73c3dfe5840eb728c534bac6c5e5 = $this->env->getExtension("native_profiler");
        $__internal_0b28edbdfc58e25843b3888b3c65b703e8be73c3dfe5840eb728c534bac6c5e5->enter($__internal_0b28edbdfc58e25843b3888b3c65b703e8be73c3dfe5840eb728c534bac6c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b28edbdfc58e25843b3888b3c65b703e8be73c3dfe5840eb728c534bac6c5e5->leave($__internal_0b28edbdfc58e25843b3888b3c65b703e8be73c3dfe5840eb728c534bac6c5e5_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_bd9538e08a0b7de58699e984f91a5e16822c2434ea840be4396b3ef525a726fa = $this->env->getExtension("native_profiler");
        $__internal_bd9538e08a0b7de58699e984f91a5e16822c2434ea840be4396b3ef525a726fa->enter($__internal_bd9538e08a0b7de58699e984f91a5e16822c2434ea840be4396b3ef525a726fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd9538e08a0b7de58699e984f91a5e16822c2434ea840be4396b3ef525a726fa->leave($__internal_bd9538e08a0b7de58699e984f91a5e16822c2434ea840be4396b3ef525a726fa_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_6cf815a51295f4c9ace6347360b3f823c34086f51f6b896bf2ebdeed02e4bf95 = $this->env->getExtension("native_profiler");
        $__internal_6cf815a51295f4c9ace6347360b3f823c34086f51f6b896bf2ebdeed02e4bf95->enter($__internal_6cf815a51295f4c9ace6347360b3f823c34086f51f6b896bf2ebdeed02e4bf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6cf815a51295f4c9ace6347360b3f823c34086f51f6b896bf2ebdeed02e4bf95->leave($__internal_6cf815a51295f4c9ace6347360b3f823c34086f51f6b896bf2ebdeed02e4bf95_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_59a5e39077f84b4bfc0f71cf47709c9f22b633cfd5c10cfba318a04acf64b35f = $this->env->getExtension("native_profiler");
        $__internal_59a5e39077f84b4bfc0f71cf47709c9f22b633cfd5c10cfba318a04acf64b35f->enter($__internal_59a5e39077f84b4bfc0f71cf47709c9f22b633cfd5c10cfba318a04acf64b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_59a5e39077f84b4bfc0f71cf47709c9f22b633cfd5c10cfba318a04acf64b35f->leave($__internal_59a5e39077f84b4bfc0f71cf47709c9f22b633cfd5c10cfba318a04acf64b35f_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 40,  162 => 38,  159 => 37,  151 => 35,  149 => 34,  146 => 33,  140 => 31,  138 => 30,  134 => 29,  131 => 28,  129 => 27,  123 => 26,  116 => 23,  114 => 22,  108 => 21,  99 => 17,  91 => 15,  89 => 14,  86 => 13,  80 => 11,  78 => 10,  74 => 9,  71 => 8,  69 => 7,  63 => 6,  56 => 3,  54 => 2,  48 => 1,  41 => 26,  38 => 25,  36 => 21,  33 => 20,  31 => 6,  28 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
";
    }
}
