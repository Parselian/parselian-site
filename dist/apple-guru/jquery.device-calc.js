(function ($) {
    $(function () {

        var selectOptions = {
            minimumResultsForSearch: Infinity,
            width: '100%'
        }
        $('.select-style select').select2(selectOptions);
        $.ajax({
            dataType: "json",
            url: '/json.json',
            success: function (result) {
                var _hScrol = 0;
                if ($(window).width() >= 768)
                    _hScrol = 80;
                else
                    _hScrol = 45;

                var data = result;
                var _place = $('#devices'),
                    _deviceTmpl = _place.html(),
                    _modalPlace = $('#modal'),
                    _modalTmpl = _modalPlace.html(),
                    _malMainPlace = $('#malfunction-main'),
                    _malMainTmpl = _malMainPlace.html(),
                    _malFullPlace = $('#malfunction-full'),
                    _malFullTmpl = _malFullPlace.html(),
                    _masterDeparturePlace = $('#master-departure'),
                    _masterDepartureTmpl = _masterDeparturePlace.html(),
                    _detailPricePlace = $('#detail-price'),
                    _detailPricePlaceDbl = $('#detail-price-dbl'),
                    _detailPriceTmpl = _detailPricePlace.html(),
                    _masterDetailPricePlace = $('#master-detail-price'),
                    _masterDetailPricePlaceDbl = $('#master-detail-price-dbl'),
                    _masterDetailPriceTmpl = _masterDetailPricePlace.html(),
                    _fullPricePlace = $('#full-price'),
                    _fullPriceTmpl = _fullPricePlace.html(),
                    _detailListPlace = $('#detail-list'),
                    _detailListPlaceDbl = $('#detail-list-dbl'),
                    _detailListTmpl = _detailListPlace.html();

                _place.html('');
                _modalPlace.html('');
                _malMainPlace.html('');
                _malFullPlace.html('');
                $.each(data.devices, function (index, el) {
                    var _newDeviceTmpl = _deviceTmpl;
                    _newDeviceTmpl = _newDeviceTmpl.replace("{pic}", this.pic);
                    _newDeviceTmpl = _newDeviceTmpl.replace("{name}", this.name);
                    var _liDevice = $(_newDeviceTmpl).data('index', index).appendTo(_place);
                    _liDevice.find('a').on('click', function () {
                        changeDevice(index);
                        return false;
                    });
                });
                if ($('#calculation').length) {
                    $('#select-device').html('<option>-</option>');
                    $.each(data.devices, function (index, el) {
                        $('<option value="' + index + '">' + el.name + '</option>').appendTo($('#select-device'));
                    });
                    $('#select-device').on('change', function () {
                        changeDevice($(this).val());
                    });
                }
                if ($('.burger').length) {
                    $.each(data.devices, function (index, el) {
                        $('<div class="item"><a href="#">Ремонт ' + el.name + '</a></div>').appendTo($('.burger .ajax-list')).find('a').on('click', function () {
                            changeDevice(index);
                            $('.burger').slideUp(500);
                        });
                    });
                }

                function changeDevice(index) {
                    var _arrDevice = data.devices[index], _active = false;
                    $('#devices li').each(function () {
                        if (index == $(this).data('index')) {
                            if ($(this).find('a').hasClass('active')) {
                                _active = true;
                            } else {
                                $(this).find('a').addClass('active');
                            }
                        } else {
                            $(this).find('a').removeClass('active');
                        }
                    });
                    $('#select-device').select2("destroy").val(index).select2(selectOptions);
                    $('.mini-notification .n-device').html(_arrDevice.name);
                    $('#orderModal .n-device').html(_arrDevice.name);
                    if (_active == false) {
                        $('.mini-notification').slideUp(500);
                        $('.calculation').slideUp(500);
                        $('.malfunction').slideUp(500, function () {
                            _malMainPlace.html('');
                            _malFullPlace.html('');
                        });
                        $('.device-model').slideUp(500, function () {
                            _modalPlace.html('');
                            if (_arrDevice.models) {
                                $.each(_arrDevice.models, function (indexD, elD) {
                                    var _newModalTmpl = _modalTmpl;
                                    _newModalTmpl = _newModalTmpl.replace("{pic}", this.pic);
                                    _newModalTmpl = _newModalTmpl.replace("{name}", this.name);
                                    var _liModal = $(_newModalTmpl).data('index', indexD).appendTo(_modalPlace);
                                    _liModal.find('a').on('click', function() {
                                        changeModal(index, indexD);
                                        return false;
                                    });
                                });
                                if ($('#calculation').length) {
                                    $('#select-model').html('<option>-</option>');
                                    $.each(_arrDevice.models, function (index, el) {
                                        $('<option value="' + index + '">' + el.short_name + '</option>').appendTo($('#select-model'));
                                    });
                                    $('#select-model').on('change', function () {
                                        changeModal(index, $(this).val(), true);
                                    });
                                }
                                $('.device-model').slideDown(500, function () {
                                    $('html, body').animate({
                                        scrollTop: $('.device-model').offset().top - _hScrol
                                    }, 500);
                                });
                            } else {
                                $('#select-model').html('<option>-</option>');
                            }
                        });
                        $('html, body').animate({
                            scrollTop: $('.device-model').offset().top - _hScrol
                        }, 500);
                    }
                }



                function changeModal(indexD, indexM, instanceChange = false) {
                    //changeDevice(indexD);

                    var _arrDevice = data.devices[indexD], _arrModel = _arrDevice.models[indexM], _active = false;
                    $('#modal > div').each(function () {
                        if (indexM == $(this).data('index')) {
                            if ($(this).find('a').hasClass('active')) {
                                _active = true;
                            } else {
                                $(this).find('a').addClass('active');
                                $('input[name="selected-device"]').attr('value', $(this).find('.name').text());
                            }
                        } else {
                            $(this).find('a').removeClass('active');
                        }
                    });
                    $('#select-model').select2("destroy").val(indexM).select2(selectOptions);
                    $('.mini-notification .n-model').html(_arrModel.short_name);
                    $('#orderModal .n-model').html(_arrModel.short_name);
                    if (_active == false) {
                        if(instanceChange == false) {
                            $('.mini-notification').slideUp(500);
                            $('.calculation').slideUp(500);
                            $('.malfunction').slideUp(500, function () {
                                _malMainPlace.html('');
                                _malFullPlace.html('');
                                console.log(_arrModel);
                                if (_arrModel.malfunctions) {

                                    $.each(_arrModel.malfunctions, function (indexP, el) {
                                        var _newMalMainTmpl = _malMainTmpl, _newMalFullTmpl = _malFullTmpl,
                                            _dataMal = this;
                                        if (_dataMal.main && _dataMal.main === true) {
                                            _newMalMainTmpl = _newMalMainTmpl.replace("{pic}", _dataMal.pic);
                                            _newMalMainTmpl = _newMalMainTmpl.replace("{name}", _dataMal.name);
                                            var _liMalMain = $(_newMalMainTmpl).data('index', indexP).appendTo(_malMainPlace);
                                            _liMalMain.find('a').on('click', function () {
                                                changeMalfunction(indexD, indexM, indexP);
                                                return false;
                                            });
                                        }
                                        _newMalFullTmpl = _newMalFullTmpl.replace("{name}", _dataMal.name);
                                        var _liMalFull = $(_newMalFullTmpl).data('index', indexP).appendTo(_malFullPlace);
                                        _liMalFull.find('a').on('click', function () {
                                            changeMalfunction(indexD, indexM, indexP);
                                            return false;
                                        });
                                    });

                                    if ($('#calculation').length) {
                                        $('#select-malfunction').html('<option>-</option>');
                                        if (_arrModel.malfunctions) {
                                            $.each(_arrModel.malfunctions, function (index, el) {
                                                $('<option value="' + index + '">' + el.name + '</option>').appendTo($('#select-malfunction'));
                                            });
                                        }
                                        $('#select-malfunction').on('change', function () {
                                            changeMalfunction(indexD, indexM, $(this).val());
                                        });
                                    }
                                    $('.malfunction').slideDown(500, function () {
                                        $('html, body').animate({
                                            scrollTop: $('.malfunction').offset().top - _hScrol
                                        }, 500);
                                    });
                                } else {
                                    $('#select-malfunction').html('<option>-</option>');
                                }
                            });
                        }  else {
                           // $('.mini-notification').slideUp(500);
                            //$('.calculation').slideUp(500);
                           // $('.malfunction').slideUp(500, function () {
                                _malMainPlace.html('');
                                _malFullPlace.html('');
                                console.log(_arrModel);
                                if (_arrModel.malfunctions) {

                                    $.each(_arrModel.malfunctions, function (indexP, el) {
                                        var _newMalMainTmpl = _malMainTmpl, _newMalFullTmpl = _malFullTmpl,
                                            _dataMal = this;
                                        if (_dataMal.main && _dataMal.main === true) {
                                            _newMalMainTmpl = _newMalMainTmpl.replace("{pic}", _dataMal.pic);
                                            _newMalMainTmpl = _newMalMainTmpl.replace("{name}", _dataMal.name);
                                            var _liMalMain = $(_newMalMainTmpl).data('index', indexP).appendTo(_malMainPlace);
                                            _liMalMain.find('a').on('click', function () {
                                                changeMalfunction(indexD, indexM, indexP);
                                                return false;
                                            });
                                        }
                                        _newMalFullTmpl = _newMalFullTmpl.replace("{name}", _dataMal.name);
                                        var _liMalFull = $(_newMalFullTmpl).data('index', indexP).appendTo(_malFullPlace);
                                        _liMalFull.find('a').on('click', function () {
                                            changeMalfunction(indexD, indexM, indexP);
                                            return false;
                                        });
                                    });

                                    if ($('#calculation').length) {

                                        var currMalfunction = $('#select-malfunction').val();
                                        $('#select-malfunction').html('<option>-</option>');

                                       if (_arrModel.malfunctions) {
                                           $.each(_arrModel.malfunctions, function (index, el) {
                                               $('<option value="' + index + '">' + el.name + '</option>').appendTo($('#select-malfunction'));
                                           });
                                       }

                                        changeMalfunction(indexD, indexM, currMalfunction);

                                        $('#select-malfunction').on('change', function () {
                                            changeMalfunction(indexD, indexM, $(this).val());
                                        });
                                    }
                                    //$('.malfunction').slideDown(500, function () {
                                    //    $('html, body').animate({
                                    //        scrollTop: $('.malfunction').offset().top - _hScrol
                                    //    }, 500);
                                    //});
                                } else {
                                    $('#select-malfunction').html('<option>-</option>');
                                }
                           // });
                        }
                    }
                }

                function changeMalfunction(indexD, indexM, indexP) {
                    var _arrDevice = data.devices[indexD], _arrModel = _arrDevice.models[indexM], _active = false;
                    var _fullMalfunction = _arrModel.malfunctions;
                    if (typeof _fullMalfunction[indexP] !== 'undefined') {
                        var _arrMalfunction = _fullMalfunction[indexP];
                        console.log(_arrMalfunction);



                        $('.malfunction .item').each(function () {
                            var _el = $(this).parent();
                            if (indexP == _el.data('index')) {
                                if (_el.find('a').hasClass('active')) {
                                    _active = true;
                                } else {
                                    _el.find('a').addClass('active');
                                    $('input[name="selected-problem"]').attr('value', _el.find('.name').text());
                                }
                            } else {
                                _el.find('a').removeClass('active');
                            }
                        });
                        $('#select-malfunction').select2("destroy").val(indexP).select2(selectOptions);
                        $('.mini-notification .n-malfunction').html(_arrMalfunction.name);
                        $('#orderModal .n-malfunction').html(_arrMalfunction.name);
                        if (_active == false) {
                            _masterDeparturePlace.html('');
                            _detailPricePlace.html('');
                            _detailPricePlaceDbl.html('');
                            _fullPricePlace.html('');
                            _detailListPlace.html('');
                            _detailListPlaceDbl.html('');
                            _masterDetailPricePlace.fadeTo(0, 0);
                            _masterDetailPricePlaceDbl.fadeTo(0, 0);
                            var all_price = 0;
                            if (_arrMalfunction.departure && _arrMalfunction.departure_price && _arrMalfunction.departure == true) {
                                var _newMasterDepartureTmpl = _masterDepartureTmpl;
                                _newMasterDepartureTmpl = _newMasterDepartureTmpl.replace("{price}", _arrMalfunction.departure_price);
                                var newMdf = $(_newMasterDepartureTmpl).appendTo(_masterDeparturePlace);
                                newMdf.find('input[type="checkbox"]').on('change', function () {
                                    all_price = 0;
                                    var _el = $(this);
                                    if (_el[0].checked) {
                                        var _newmasterDetailPriceTmpl = _masterDetailPriceTmpl;
                                        _newmasterDetailPriceTmpl = _newmasterDetailPriceTmpl.replace("{price}", _arrMalfunction.departure_price);
                                        $(_masterDetailPricePlace).html(_newmasterDetailPriceTmpl);
                                        $(_masterDetailPricePlaceDbl).html(_newmasterDetailPriceTmpl);
                                        all_price += parseFloat(_arrMalfunction.departure_price);

                                        _masterDetailPricePlace.fadeTo("fast", 1);
                                        _masterDetailPricePlaceDbl.fadeTo("fast", 1);
                                    } else {
                                        _masterDetailPricePlace.fadeTo(0, 0);
                                        _masterDetailPricePlaceDbl.fadeTo(0, 0);
                                    }

                                    _detailPricePlace.html('');
                                    _detailPricePlaceDbl.html('');
                                    if (_arrMalfunction.price_detail) {
                                        $.each(_arrMalfunction.price_detail, function () {
                                            var _newDetailPriceTmpl = _detailPriceTmpl;
                                            _newDetailPriceTmpl = _newDetailPriceTmpl.replace("{name}", this.name);
                                            _newDetailPriceTmpl = _newDetailPriceTmpl.replace("{display_price}", this.display_price);
                                            $(_newDetailPriceTmpl).appendTo(_detailPricePlace);
                                            $(_newDetailPriceTmpl).appendTo(_detailPricePlaceDbl);
                                            all_price += parseFloat(this.price);
                                        });
                                    }
                                    _fullPricePlace.html('');
                                    var _newFullPriceTmpl = _fullPriceTmpl;
                                    _newFullPriceTmpl = _newFullPriceTmpl.replace("{price}", all_price);
                                    $(_newFullPriceTmpl).appendTo(_fullPricePlace);

                                    $('.mini-notification .price').html(all_price);
                                    $('#orderModal .m-price').html(all_price);
                                });
                            }
                            if (_arrMalfunction.price_detail) {
                                $.each(_arrMalfunction.price_detail, function () {
                                    var _newDetailPriceTmpl = _detailPriceTmpl;
                                    _newDetailPriceTmpl = _newDetailPriceTmpl.replace("{name}", this.name);
                                    _newDetailPriceTmpl = _newDetailPriceTmpl.replace("{display_price}", this.display_price);
                                    $(_newDetailPriceTmpl).appendTo(_detailPricePlace);
                                    $(_newDetailPriceTmpl).appendTo(_detailPricePlaceDbl);
                                    all_price += parseFloat(this.price);
                                });
                            }

                            var _newFullPriceTmpl = _fullPriceTmpl;
                            _newFullPriceTmpl = _newFullPriceTmpl.replace("{price}", all_price);
                            $(_newFullPriceTmpl).appendTo(_fullPricePlace);

                            $('.mini-notification .price').html(all_price);
                            $('#orderModal .m-price').html(all_price);
                            $('.mini-notification').slideDown(500);

                            if (_arrMalfunction.details) {
                                $.each(_arrMalfunction.details, function () {
                                    var _newDetailListTmpl = _detailListTmpl;
                                    _newDetailListTmpl = _newDetailListTmpl.replace("{text}", this.name);
                                    $(_newDetailListTmpl).appendTo(_detailListPlace);
                                    $(_newDetailListTmpl).appendTo(_detailListPlaceDbl);

                                });
                            }

                            $('.calculation').slideDown(500, function () {
                                $('html, body').animate({
                                    scrollTop: $('.calculation').offset().top - _hScrol
                                }, 500);
                            });
                        }
                    } else {
                        $('.malfunction .item').each(function () {
                            var _el = $(this).parent();
                            _el.find('a').removeClass('active');
                        });
                        $('.mini-notification').slideUp(500);
                        $('.calculation').slideUp(500, function () {
                            $('html, body').animate({
                                scrollTop: $('.malfunction').offset().top - _hScrol
                            }, 500);
                        });
                    }
                }
            },
            error: function (jq, text, error) {
                console.log(jq, text, error);
            }
        });
    });
})(jQuery);