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
        $__internal_a288389256de9d588091534a5f6f0e7bfb1ad48cc48ea07a21cb7e170c0328e5 = $this->env->getExtension("native_profiler");
        $__internal_a288389256de9d588091534a5f6f0e7bfb1ad48cc48ea07a21cb7e170c0328e5->enter($__internal_a288389256de9d588091534a5f6f0e7bfb1ad48cc48ea07a21cb7e170c0328e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a288389256de9d588091534a5f6f0e7bfb1ad48cc48ea07a21cb7e170c0328e5->leave($__internal_a288389256de9d588091534a5f6f0e7bfb1ad48cc48ea07a21cb7e170c0328e5_prof);

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
