export const Config =
    {
        tabs:
            [
                {
                    selector:'.tabs-cat',
                },
            ],
        modules:
            {
                tabs:
                    {
                        selectors:
                            {
                                links:'.link',
                                tabs:'.content',
                                active:'active'
                            },
                    },
                numberDivision:
                    {
                        selector:'.number-division'
                    },
                mapWrapper:
                    {
                        selector:'section.map',
                        mapWrapperContent:"Нажмите,что бы воспользоваться картой"
                    },
                heightBlocksInGrid:
                    {
                        selectors:
                            [
                                '.carousel-card  .card-furniture',
                                '.cases .card-furniture',
                                '.catalog-all .card-furniture'
                            ],
                    },
                FilterItems:
                    [
                        {
                            control:'.cases .nav-wrapper li',
                            items:'.cases .wrapper .card-furniture',
                            bootstrap:true,
                        },
                        {
                            control:'.catalog-all .sidebar nav li',
                            items:'.catalog-all .card_product',
                            bootstrap:true,
                        },
                    ],
            },
    };

export const carousels =
    [
        {
            selector:'.owl-carousel-card',
            options:
                {
                    items:3,
                    dots:false,
                    nav:true,
                    mouseDrag:false,
                    navElement:'nav',
                    loop:true,
                    responsive : {
                        0 : {
                            items:1,
                        },
                        768 : {
                            items:3,
                        }
                    }
                },
        },
        {
            selector:'.carousel-img',
            options:
                {
                    items:1,
                    dots:true,
                    nav:true,
                    loop:true,
                },
        },
        {
            selector:'.carousel-imgContent .owl-carousel',
            options:
                {
                    items:3,
                    nav:true,
                    loop:true,
                    dots:false,
                    responsive : {
                        0 : {
                            items:1,
                        },
                        768 : {
                            items:3,
                        }
                    }
                },
        },
        {
            selector:'.carousel_characters',
            options:
                {
                    items:1,
                    nav:true,
                    // loop:true,
                    dots:true,
                },
        },
        {
            selector:'.carousel-img-threeColumns',
            options:
                {
                    items:3,
                    dots:false,
                    nav:true,
                    loop:true,
                    responsive : {
                        0 : {
                            items:1,
                        },
                        768 : {
                            items:3,
                        }
                    }
                },
        },
    ];

export const carouselsConfig =
    {
        classes: [ 'owl-theme','owl-carousel'],
    };

export const  formConfig =
    {
        'selectors' :
            {
                'forms':'form._form',
                'send':'.send'
            }
    };

export const fancyBoxConfig =
    {
        selector:'.fancybox',
        selectorGallery:'[data-fancybox-warpper]',
        classNameZoom:'icon_zoom',
        options:
            {
                type:'image',
                opts:
                    {
                        modal:true,
                        showCloseButton:true,
                        hideOnContentClick:true,
                    },

            },
    };