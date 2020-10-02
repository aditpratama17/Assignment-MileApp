<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;

class PackageController extends Controller
{
    public function getIndex ($id) {
        $package = \DB::connection('mongodb')
        ->collection('packages')
        ->where('transaction_id', $id)
        ->get();
        return response()->json($package);
    }
    
    public function package (Request $request) {
        if($request->isMethod('get')){
            $package = \DB::connection('mongodb')
            ->collection('packages')
            ->get();
            // return response()->json($package[0]['koli_data']);
            return response()->json($package);
        }
        else {
            $package = new Packages;
            $package->transaction_id = $request->input('transaction_id');
            $package->customer_name = $request->input('customer_name');
            $package->customer_code = $request->input('customer_code');
            $package->transaction_amount = $request->input('transaction_amount');
            $package->transaction_discount = $request->input('transaction_discount');
            $package->transaction_additional_field = $request->input('transaction_additional_field');
            $package->transaction_payment_type = $request->input('transaction_payment_type');
            $package->transaction_state = $request->input('transaction_state');
            $package->transaction_code = $request->input('transaction_code');
            $package->transaction_order = $request->input('transaction_order');
            $package->location_id = $request->input('location_id');
            $package->organization_id = $request->input('organization_id');
            $package->created_at = $request->input('created_at');
            $package->updated_at = $request->input('updated_at');
            $package->transaction_payment_type_name = $request->input('transaction_payment_type_name');
            $package->transaction_cash_amount = $request->input('transaction_cash_amount');
            $package->transaction_cash_change = $request->input('transaction_cash_change');
            $package->customer_attribute = array(
                'Nama_Sales' => $request->input('customer_attribute.Nama_Sales'),
                'TOP' => $request->input('customer_attribute.TOP'),
                'Jenis_Pelanggan' => $request->input('customer_attribute.Jenis_Pelanggan')
            );
            $package->connote = array ( 
                'connote_id' => $request->input('connote.connote_id'),
                'connote_number' => $request->input('connote.connote_number'),
                'connote_service' => $request->input('connote.connote_service'),
                'connote_service_price' => $request->input('connote.connote_service_price'),
                'connote_amount' => $request->input('connote.connote_amount'),
                'connote_code' => $request->input('connote.connote_code'),
                'connote_booking_code' => $request->input('connote.connote_booking_code'),
                'connote_order' => $request->input('connote.connote_order'),
                'connote_state' => $request->input('connote.connote_state'),
                'connote_state_id' => $request->input('connote.connote_state_id'),
                'zone_code_from' => $request->input('connote.zone_code_from'),
                'zone_code_to' => $request->input('connote.zone_code_to'),
                'surcharge_amount' => $request->input('connote.surcharge_amount'),
                'transaction_id' => $request->input('connote.transaction_id'),
                'actual_weight' => $request->input('connote.actual_weight'),
                'volume_weight' => $request->input('connote.volume_weight'),
                'chargeable_weight' => $request->input('connote.chargeable_weight'),
                'created_at' => $request->input('connote.created_at'),
                'updated_at' => $request->input('connote.updated_at'),
                'organization_id' => $request->input('connote.organization_id'),
                'location_id' => $request->input('connote.location_id'),
                'connote_total_package' => $request->input('connote.connote_total_package'),
                'connote_surcharge_amount' => $request->input('connote.connote_surcharge_amount'),
                'connote_sla_day' => $request->input('connote.connote_sla_day'),
                'location_name' => $request->input('connote.location_name'),
                'location_type' => $request->input('connote.location_type'),
                'source_tariff_db' => $request->input('connote.source_tariff_db'),
                'id_source_tariff' => $request->input('connote.id_source_tariff'),
                'pod' => $request->input('connote.pod'),
                'history' => $request->input('connote.history')
            );
            $package->connote_id = $request->input('connote_id');
            $package->origin_data = array ( 
                'customer_name' => $request->input('origin_data.customer_name'),
                'customer_address' => $request->input('origin_data.customer_address'),
                'customer_email' => $request->input('origin_data.customer_email'),
                'customer_phone' => $request->input('origin_data.customer_phone'),
                'customer_address_detail' => $request->input('origin_data.customer_address_detail'),
                'customer_zip_code' => $request->input('origin_data.customer_zip_code'),
                'zone_code' => $request->input('origin_data.zone_code'),
                'organization_id' => $request->input('origin_data.organization_id'),
                'location_id' => $request->input('origin_data.location_id')
            );
            $package->destination_data = array ( 
                'customer_name' => $request->input('destination_data.customer_name'),
                'customer_address' => $request->input('destination_data.customer_address'),
                'customer_email' => $request->input('destination_data.customer_email'),
                'customer_phone' => $request->input('destination_data.customer_phone'),
                'customer_address_detail' => $request->input('destination_data.customer_address_detail'),
                'customer_zip_code' => $request->input('destination_data.customer_zip_code'),
                'zone_code' => $request->input('destination_data.zone_code'),
                'organization_id' => $request->input('destination_data.organization_id'),
                'location_id' => $request->input('destination_data.location_id')
            );
            $package->koli_data = array ( 
                array(
                    'koli_length' => $request->input('koli_data.key.koli_length'),
                    'awb_url' => $request->input('koli_data.key.awb_url'),
                    'created_at' => $request->input('koli_data.key.created_at'),
                    'koli_chargeable_weight' => $request->input('koli_data.key.koli_chargeable_weight'),
                    'koli_width' => $request->input('koli_data.key.koli_width'),
                    'koli_surcharge' => $request->input('koli_data.key.koli_surcharge'),
                    'koli_height' => $request->input('koli_data.key.koli_height'),
                    'updated_at' => $request->input('koli_data.key.updated_at'),
                    'koli_description' => $request->input('koli_data.key.koli_description'),
                    'koli_formula_id' => $request->input('koli_data.key.koli_formula_id'),
                    'connote_id' => $request->input('koli_data.key.connote_id'),
                    'koli_volume' => $request->input('koli_data.key.koli_volume'),
                    'koli_weight' => $request->input('koli_data.key.koli_weight'),
                    'koli_id' => $request->input('koli_data.key.koli_id'),
                    'koli_custom_field' => array(
                        'awb_sicepat' => $request->input('koli_data.key.koli_custom_field.awb_sicepat'),
                        'harga_barang' => $request->input('koli_data.key.koli_custom_field.harga_barang')
                    ),  
                    'koli_code' => $request->input('koli_data.key.koli_code')
                )
            );
            $package->custom_field = $request->input('custom_field');
            $package->currentLocation = array ( 
                'name' => $request->input('currentLocation.name'),
                'code' => $request->input('currentLocation.code'),
                'type' => $request->input('currentLocation.type'),
            );
            
            if ($package->save()) {
                return response()->json('Success');
            }
            else {
                return response()->json('Not Success');
            }   
        }
    }

    public function putPackage ($id, Request $request) {
        $package = \DB::connection('mongodb')
        ->collection('packages')
        ->where('transaction_id', $id)
        ->update(['customer_name' => $request->input('customer_name')]);

        if ($package) {
            return response()->json('Success');
        }
        else {
            return response()->json('Not Success');
        }
    }

    public function patchPackage ($id, Request $request) {
        $package = \DB::connection('mongodb')
        ->collection('packages')
        ->where('transaction_id', $id)
        ->update(['customer_name' => $request->input('customer_name')]);

        if ($package) {
            return response()->json('Success');
        }
        else {
            return response()->json('Not Success');
        }
    }

    public function deletePackage ($id, Request $request) {
        $package = \DB::connection('mongodb')
        ->collection('packages')
        ->where('transaction_id', $id);

        if ($package->delete()) {
            return response()->json('Success');
        }
        else {
            return response()->json('Not Success');
        }
    }
}
