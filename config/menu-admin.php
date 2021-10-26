<?php


return [
    [
        'label' => 'Thương hiệu',
        'icon' => 'pe-7s-diamond',
        'items' => [
            [
                'label' => 'Danh sách thương hiệu',
                'route' => 'admin.list-category'
            ],
            [
                'label' => 'Thêm thương hiệu',
                'route' => 'admin.add-category'
            ]
        ]
    ],
    [
        'label' => 'Sản phẩm',
        'icon' => 'pe-7s-bookmarks',
        'items' => [
            [
                'label' => 'Danh sách sản phẩm',
                'route' => 'product.index'
            ],
            [
                'label' => 'Thêm sản phẩm',
                'route' => 'product.create'
            ]
        ]
    ],
    [
        'label' => 'Màu sản phẩm',
        'icon' => 'pe-7s-science',
        'items' => [
            [
                'label' => 'Danh sách màu sản phẩm',
                'route' => 'admin.list-color'
            ],
            [
                'label' => 'Thêm màu sản phẩm',
                'route' => 'admin.add-color'
            ]
        ]
    ],
    [
        'label' => 'Blog',
        'icon' => 'pe-7s-science',
        'items' => [
            [
                'label' => 'Danh sách blog',
                'route' => 'blog.index'
            ],
            [
                'label' => 'Thêm blog',
                'route' => 'blog.create'
            ]
        ]
    ],
    [
        'label' => 'Banner',
        'icon' => 'pe-7s-photo',
        'items' => [
            [
                'label' => 'Danh sách banner',
                'route' => 'admin.list-banner'
            ],
            [
                'label' => 'Thêm banner',
                'route' => 'admin.add-banner'
            ]
        ]
    ],
    [
        'label' => 'Tài khoản người dùng',
        'icon' => 'pe-7s-users',
        'items' => [
            [
                'label' => 'Danh sách người dùng',
                'route' => 'admin.list-user'
            ],
            [
                'label' => 'Thêm người dùng',
                'route' => 'admin.add-user'
            ]
        ]
    ],
    [
        'label' => 'Bình luận',
        'icon' => 'pe-7s-comment',
        'items' => [
            [
                'label' => 'Danh sách bình luận',
                'route' => 'admin.list-comment'
            ],
            [
                'label' => 'Thêm bình luận',
                'route' => 'admin.add-comment'
            ]
        ]
    ],
    [
        'label' => 'Đơn hàng',
        'icon' => 'pe-7s-cart',
        'items' => [
            [
                'label' => 'Danh sách đơn hàng',
                'route' => 'admin.list-order'
            ],
            [
                'label' => 'Thêm đơn hàng',
                'route' => 'admin.add-order'
            ]
        ]
    ],

];
