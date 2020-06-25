    $(function() {
        $.contextMenu({
            selector: '.context-menu-one',
            callback: function(key, options) {
                var m = "clicked: " + key;
                
            },
            items: {
                "edit": { name: "Edit", icon: "edit" },
                "cut": { name: "Cut", icon: "cut" },
                copy: { name: "Copy", icon: "copy" },
                "paste": { name: "Paste", icon: "paste" },
                "delete": { name: "Delete", icon: "delete" },
                "sep1": "---------",
                "quit": {
                    name: "Quit",
                    icon: function() {
                        return 'context-menu-icon context-menu-icon-quit';
                    }
                }
            }
        });
        $('#the-node').contextMenu({
            selector: 'li',
            callback: function(key, options) {
                var m = "clicked: " + key + " on " + $(this).text();
                
            },
            items: {
                "edit": { name: "Edit", icon: "edit" },
                "cut": { name: "Cut", icon: "cut" },
                "copy": { name: "Copy", icon: "copy" },
                "paste": { name: "Paste", icon: "paste" },
                "delete": { name: "Delete", icon: "delete" },
                "sep1": "---------",
                "quit": { name: "Quit", icon: function($element, key, item) { return 'context-menu-icon context-menu-icon-quit'; } }
            }
        });
        $.contextMenu({
            selector: '.context-menu-two',
            trigger: 'hover',
            delay: 500,
            callback: function(key, options) {
                var m = "clicked: " + key;
                
            },
            items: {
                "edit": { name: "Edit", icon: "edit" },
                "cut": { name: "Cut", icon: "cut" },
                "copy": { name: "Copy", icon: "copy" },
                "paste": { name: "Paste", icon: "paste" },
                "delete": { name: "Delete", icon: "delete" },
                "sep1": "---------",
                "quit": { name: "Quit", icon: function($element, key, item) { return 'context-menu-icon context-menu-icon-quit'; } }
            }
        });
        $.contextMenu({
            selector: '.context-menu-three',
            callback: function(key, options) {
                var m = "clicked: " + key;
                
            },
            items: {
                "edit": { name: "Edit", icon: "fas fa-edit" },
                "cut": { name: "Trash", icon: "fas fa-trash" },
                "copy": { name: "Thumbs Up", icon: "fas fa-thumbs-up" },
                "paste": { name: "Thumbs Down", icon: "fas fa-thumbs-down" }
            }
        });

        $.contextMenu({
            selector: '.context-menu-four',
            callback: function(key, options) {
                var m = "clicked: " + key;
                
            },
            items: {
                "edit": { "name": "Edit", "icon": "edit" },
                "cut": { "name": "Cut", "icon": "cut" },
                "sep1": "---------",
                "quit": { "name": "Quit", "icon": "quit" },
                "sep2": "---------",
                "fold1": {
                    "name": "Sub group",
                    "items": {
                        "fold1-key1": { "name": "Foo bar" },
                        "fold2": {
                            "name": "Sub group 2",
                            "items": {
                                "fold2-key1": { "name": "alpha" },
                                "fold2-key2": { "name": "bravo" },
                                "fold2-key3": { "name": "charlie" }
                            }
                        },
                        "fold1-key3": { "name": "delta" }
                    }
                },
                "fold1a": {
                    "name": "Other group",
                    "items": {
                        "fold1a-key1": { "name": "echo" },
                        "fold1a-key2": { "name": "foxtrot" },
                        "fold1a-key3": { "name": "golf" }
                    }
                }
            }
        });


        $.contextMenu({
            selector: '.context-menu-five',
            trigger: 'left',
            callback: function(key, options) {
                var m = "clicked: " + key;
                
            },
            items: {
                "edit": { name: "Edit", icon: "edit" },
                "cut": { name: "Cut", icon: "cut" },
                "copy": { name: "Copy", icon: "copy" },
                "paste": { name: "Paste", icon: "paste" },
                "delete": { name: "Delete", icon: "delete" },
                "sep1": "---------",
                "quit": { name: "Quit", icon: function($element, key, item) { return 'context-menu-icon context-menu-icon-quit'; } }
            }
        });
        $('.context-menu-five').on('click', function(e) {
            
        })
    });