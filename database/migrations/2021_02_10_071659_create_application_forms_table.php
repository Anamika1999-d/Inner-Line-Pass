<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('Application_No')->unique();
            $table->Date('Application_date');
            $table->String('Applicant_Name');
            $table->String('EPIC_UID_No');
            $table->Date('DOB');
            $table->String('gender');
            $table->integer('Age');
            $table->String('Religion');
            $table->String('Occupation');
            $table->String('Education');
            $table->String('IdentificationMark');
            $table->String('Email')->nullable();
            $table->Biginteger('Contact_No');
            $table->String('Fathers_Name');
            $table->String('Present_Address_Hno');
            $table->String('Present_Address_Sub_locality1');
            $table->String('Present_Address_Sub_locality2')->nullable();
            $table->String('Present_Address_Location');
            $table->String('Present_Address_Sub_District');
            $table->String('Present_Address_District');
            $table->String('Present_Address_State');
            $table->String('Present_Address_pin_code');
            $table->String('present_Address_Country');
            $table->String('Present_Address_Police_Station');
            $table->String('Present_Address_Post_office');
            $table->string('Permanent_Address_Hno');
            $table->String('Permanent_Address_Sub_locality1');
            $table->String('Permanent_Address_Sub_locality2')->nullable();
            $table->String('Permanent_Address_Location');
            $table->String('Permanent_Address_Sub_District');
            $table->String('Permanent_Address_District');
            $table->String('Permanent_Address_State');
            $table->integer('Permanent_Address_pin_code');
            $table->String('Permanent_Address_Country');
            $table->String('Permanent_Address_Police_Station');
            $table->String('Permanent_Address_Post_office');
            $table->String('E_Roll_SlNo');
            $table->String('Part_No');
            $table->String('Constituency');
            $table->String('Sponsor_Name');
            $table->String('Sponsors_Father_name');
            $table->String('Sponsors_EPIC_UID_No');
            $table->String('No_of_Non_Mizos_Presently_Sponsored')->nullable();
            $table->String('Provisional_Pass_No');
            $table->String('sponsor_address_Hno');
            $table->String('sponsor_address_Sub_locality1');
            $table->String('sponsor_address_Sub_locality2')->nullable();
            $table->String('sponsor_address_Location');
            $table->String('sponsor_address_Sub_District');
            $table->String('sponsor_address_District');
            $table->String('sponsor_address_State');
            $table->String('sponsor_address_pin_code');
            $table->String('sponsor_address_Police_Station');
            $table->String('sponsor_address_Post_office');
            $table->String('VC')->nullable();
            $table->String('Purpose_of_stay');
            $table->String('Need_for_labour')->nullable();
            $table->String('Regd_No')->nullable();
            $table->String('LSC_No')->nullable();
            $table->String('Skilled_SemiSkilled_Unskilled')->nullable();
            $table->Date('Validaty_Period');
            $table->String('Remark')->nullable();
            $table->String('doc1');
            $table->String('doc2');
            $table->String('Remarks_from_Forwarder');
            $table->date('Forwarder_UpdatedAt')->nullable();
            $table->string('Remarks_from_Officer');
            $table->date('Officer_UpdatedAt')->nullable();
            $table->string('Pass_No')->nullable();
            $table->string('DigitalSign')->nullable();
            $table->string('ACK_Downloaded')->nullable();
            $table->string('ILP_Downloaded')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_forms');
    }
}
