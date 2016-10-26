<?php

/* LGPUserBundle:Avis:formulaire.html.twig */
class __TwigTemplate_938335a751375b435ce4407abba1345be6128b239446b205c8a736654110587a extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<div class='row'>
    <div class='col-md-3'>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'label', array("label_attr" => array(), "label" => "Note /5"));
        echo " : </div>
    <div class='col-md-4'>
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "note", array()), 'errors');
        echo "
    </div>
</div>
    <br>
<div class='row'>
    <div class='col-md-3'>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'label', array("label_attr" => array(), "label" => "Commentaire"));
        echo "</div>
    <div class='col-md-4'>
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "commentaire", array()), 'errors');
        echo "
    </div>
</div>
    <br>
<div class='row'>
";
        // line 21
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array(), "any", true, true)) {
            // line 22
            echo "    <div class='col-md-3'>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array()), 'label', array("label_attr" => array(), "label" => "Veuillez choisir le prof"));
            echo "</div>
    <div class='col-md-4'>
        ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prof", array()), 'errors');
            echo "
    </div>
";
        }
        // line 28
        echo "</div><br>
";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\">

";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Avis:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  84 => 29,  81 => 28,  75 => 25,  71 => 24,  65 => 22,  63 => 21,  55 => 16,  51 => 15,  46 => 13,  38 => 8,  34 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
