<template>
    <div class="section-footer">
        <div class="container py-4">
            <div class="row">
                <div class="col-xs-12 col-md-4 pb-4">
                    <div class="col-footer">
                        <ul>
                            <li><h4>Scopri Deliveroo</h4></li>
                            <li><a href="https://corporate.deliveroo.co.uk/">Investitori</a></li>
                            <li><a href="https://deliveroo.it/it/about-us">Chi Siamo</a></li>
                            <li><a href="https://deliveroo.it/it/takeaway/">Ristoranti</a></li>
                            <li><a href="https://deliveroo.it/it/more/">Altro</a></li>
                            <li><a href="https://it.deliveroo.news/">Pressroom</a></li>
                            <li><a href="https://deliveroo.engineering/">Programmazione</a></li>
                            <li><a href="https://www.deliveroo.design/">Design</a></li>
                            <li><a href="https://careers.deliveroo.it/en/">Lavora con noi</a></li>
                            <li><a href="https://restaurants.deliveroo.com/it-it/">Diventa nostro partner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 pb-4">
                    <div class="col-footer">
                        <ul>
                            <li><h4>Note legali</h4></li>
                            <li><a href="https://deliveroo.it/it/legal">Termini & condizioni</a></li>
                            <li><a href="https://deliveroo.it/it/privacy">Informativa sulla privacy</a></li>
                            <li><a href="https://deliveroo.it/it/cookies">Cookies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 pb-4">
                    <div class="col-footer">
                        <ul>
                            <li><h4>Contatti</h4></li>
                            <li>
                                <span>Anna Tassone</span>
                                <a href="https://github.com/Anna93803"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/anna-tassone/"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                            <li>
                                <span>Paolo Pugiese</span>
                                <a href="https://github.com/paolopu91"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/paolo-pugliese-a3027a171/"><i class="fa-brands fa-linkedin"></i></a>
                            </li> 
                            <li>
                                <span>Debora De Felice</span>
                                <a href="https://github.com/Debby95"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/debora-de-felice-0349a3186/"><i class="fa-brands fa-linkedin"></i></a>
                            </li>  
                            <li>
                                <span>Stefano Saccocci</span>
                                <a href="https://github.com/StefanoSax93"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/stefano-saccocci-a67164200/"><i class="fa-brands fa-linkedin"></i></a>
                            </li>     
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col d-flex justify-content-between">
                    <ul class="social d-flex">
                        <li><a href="https://www.facebook.com/DeliverooIT"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/deliveroo_italy"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/deliveroo_italy/"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                    <div class="copyright">
                        <p>© 2022 Deliverboo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "TheFooter",
    data() {
        return {

        }
    }
}
</script>

<style lang="scss" scoped>
.section-footer {
    background: rgb(46, 51, 51);

    .col-footer {
        background: rgb(67, 72, 72);
        padding: .9375rem 0;
        height: 100%;

        li {
            list-style: none;
            padding-bottom: .4375rem;

            h4 {
                color: white;
                font-size: 1.125rem;
                font-weight: 700;
            }

            a, span {
                text-decoration: none;
                color: white;
                font-size: .875rem;

                &:hover {
                    color: rgb(0, 204, 188);
                }
            }

            span:hover {
                color: rgb(0, 204, 188);
            }

            .fa-github {
                padding: 0 10px;
            }

        }
    }
    .social {
        color: white;
        padding-left: 0rem;

        li {
            list-style: none;
        }

        i {
            padding-right: .8125rem;
            font-size: 1.25rem;
            color: white;

            &:hover {
                color: rgb(0, 204, 188);
            }
        }
    }

    .copyright {
        color: rgb(67, 72, 72);
    }

}
</style>