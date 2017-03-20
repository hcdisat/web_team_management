<template>
    <div class="panel-home">


        <div class="panel-heading"><h5 class="center">Emailings</h5>
            <ui-fab
                    @click="openModal('modal6')"
                    icon="add"
                    tooltip-position="right middle"
                    tooltip="Nuevo Email"
                    :size="large"
                    color="default"
            ></ui-fab>

        </div>
        <ui-modal ref="modal6" title="Nuevo Emaling">
            <ui-select
                    label="Mercado"
                    placeholder="Select a colour"
                    :options="select1"
                    v-model="model"
            ></ui-select>

            <div slot="footer">
                <ui-button color="primary">Crear</ui-button>
                <ui-button @click="closeModal('modal6')">Close</ui-button>
            </div>
        </ui-modal>
        <div class="panel-body">

            <ui-tabs fullwidth>
                <ui-tab title="PR">
                    Emailings de PR
                </ui-tab>
                <ui-tab title="Ofert PR">
                    Emailings de Ofertazos PR
                </ui-tab>
                <ui-tab title="CAY">
                    Emailings de CAY
                </ui-tab>
                <ui-tab title="MAY">
                    Emailings de MAY
                </ui-tab>

                <ui-tab title="SDQ">
                    Emailings de SDQ
                </ui-tab>

                <ui-tab title="Ofert SDQ">
                    Emailings de Ofertazo SDQ
                </ui-tab>

            </ui-tabs>


        </div>

    </div>
</template>


<script>
    import UiFab from 'keen-ui/src/UiFab.vue';
    import UiButton from 'keen-ui/src/UiButton.vue';
    import UiIcon from 'keen-ui/src/UiIcon.vue';
    import UiTab from 'keen-ui/src/UiTab.vue';
    import UiTabs from 'keen-ui/src/UiTabs.vue';
    import UiSelect from 'keen-ui/src/UiSelect.vue';

    import UiModal from 'keen-ui/src/UiModal.vue';

    export default {
        data() {
            return {
                showCollectionsTab: true,
                disableAuthorsTab: true,
                size: 'normal',
                model: {
                    label: "SDQ",
                    value: "SDQ"
                },
                select1: [
                    {
                        label: "SDQ",
                        value: "SDQ"
                    },
                    {
                        label: "PR",
                        value: "PR"
                    },
                    {
                        label: "PRCC",
                        value: "PRCC"
                    },
                    {
                        label: "PRM",
                        value: "PRM"
                    }
                ]
            };
        },
        methods: {
            selectFavouritesTab() {
                this.$refs.tabSet1.setActiveTab('favourites');
            },
            toggleCollectionsTab() {
                this.showCollectionsTab = !this.showCollectionsTab;
            },
            toggleAuthorsTab() {
                this.disableAuthorsTab = !this.disableAuthorsTab;
            },
            openModal(ref) {
                this.$refs[ref].open();
            },
            closeModal(ref) {
                this.$refs[ref].close();
            }
        },
        components: {
            UiButton,
            UiSelect,
            UiModal,
            UiIcon,
            UiTab,
            UiTabs,
            UiFab
        }
    };
</script>
