<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_95f8f2320a98a4d66f467b24225fb245db37cdd4bc5983bf25e88b176e9e6949 extends Twig_Template
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
        $__internal_d24be1a6a0fdf54ba60f08b6929acb0523d5fafdf64f30d24d0b74692edb21ec = $this->env->getExtension("native_profiler");
        $__internal_d24be1a6a0fdf54ba60f08b6929acb0523d5fafdf64f30d24d0b74692edb21ec->enter($__internal_d24be1a6a0fdf54ba60f08b6929acb0523d5fafdf64f30d24d0b74692edb21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d24be1a6a0fdf54ba60f08b6929acb0523d5fafdf64f30d24d0b74692edb21ec->leave($__internal_d24be1a6a0fdf54ba60f08b6929acb0523d5fafdf64f30d24d0b74692edb21ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
