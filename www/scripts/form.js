$(document).ready(function() {
    $('#registerForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                message: '邮箱地址无效',
                validators: {
                    notEmpty: {
                        message: '邮箱地址不能为空'
                    },
                    emailAddress: {
                        message: '电子邮箱格式不正确'
                    }
                }
            },
            username: {
                message: '用户名无效',
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    regexp: {    /* 只需加此键值对，包含正则表达式，和提示 */
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: '用户名必须由数字、字母或下划线组成'
                    },
                    stringLength: {
                        /*长度提示*/
                        min: 6,
                        max: 20,
                        message: '用户名长度必须在6~20个字符之间'
                    }
                }
            },
            password: {
                message:'密码无效',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: '密码长度必须在6~30个字符之间'
                    },
                    different: {
                        field: 'username',
                        message: '密码不能与用户名相同'
                    }
                }
            },
            confirm: {
                message: '密码重复还没有验证',
                validators: {
                    notEmpty: {
                        message: '再次确认密码不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 16,
                        message: '密码长度必须在在6~30个字符之间'
                    },
                    identical: {
                        field: 'password',
                        message: '两次密码输入不一致，请重新输入'
                    }
                }
            }
        }
    });


    $('#loginForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Username: {
                message: '帐号信息无效',
                validators: {
                    notEmpty: {
                        message: '登录帐号不能为空'
                    }
                }
            },
            Password: {
                message: '密码无效',
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    }
                }
            }
        }
    });
});