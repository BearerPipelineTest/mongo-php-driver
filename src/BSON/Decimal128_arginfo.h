/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: b26119e42fe5a51a4f6eec2c9876c8129c275a15 */

ZEND_BEGIN_ARG_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128___construct, 0, 0, 1)
	ZEND_ARG_TYPE_INFO(0, value, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128___toString, 0, 0, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128___set_state, 0, 1, MongoDB\\BSON\\Decimal128, 0)
	ZEND_ARG_TYPE_INFO(0, properties, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_MongoDB_BSON_Decimal128_serialize arginfo_class_MongoDB_BSON_Decimal128___toString

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128_unserialize, 0, 1, IS_VOID, 0)
	ZEND_ARG_INFO(0, serialized)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128___unserialize, 0, 1, IS_VOID, 0)
	ZEND_ARG_TYPE_INFO(0, data, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128___serialize, 0, 0, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 80000
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128_jsonSerialize, 0, 0, IS_MIXED, 0)
ZEND_END_ARG_INFO()
#endif

#if !(PHP_VERSION_ID >= 80000)
ZEND_BEGIN_ARG_INFO_EX(arginfo_class_MongoDB_BSON_Decimal128_jsonSerialize, 0, 0, 0)
ZEND_END_ARG_INFO()
#endif


static ZEND_METHOD(MongoDB_BSON_Decimal128, __construct);
static ZEND_METHOD(MongoDB_BSON_Decimal128, __toString);
static ZEND_METHOD(MongoDB_BSON_Decimal128, __set_state);
static ZEND_METHOD(MongoDB_BSON_Decimal128, serialize);
static ZEND_METHOD(MongoDB_BSON_Decimal128, unserialize);
static ZEND_METHOD(MongoDB_BSON_Decimal128, __unserialize);
static ZEND_METHOD(MongoDB_BSON_Decimal128, __serialize);
#if PHP_VERSION_ID >= 80000
static ZEND_METHOD(MongoDB_BSON_Decimal128, jsonSerialize);
#endif
#if !(PHP_VERSION_ID >= 80000)
static ZEND_METHOD(MongoDB_BSON_Decimal128, jsonSerialize);
#endif


static const zend_function_entry class_MongoDB_BSON_Decimal128_methods[] = {
	ZEND_ME(MongoDB_BSON_Decimal128, __construct, arginfo_class_MongoDB_BSON_Decimal128___construct, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	ZEND_ME(MongoDB_BSON_Decimal128, __toString, arginfo_class_MongoDB_BSON_Decimal128___toString, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	ZEND_ME(MongoDB_BSON_Decimal128, __set_state, arginfo_class_MongoDB_BSON_Decimal128___set_state, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	ZEND_ME(MongoDB_BSON_Decimal128, serialize, arginfo_class_MongoDB_BSON_Decimal128_serialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	ZEND_ME(MongoDB_BSON_Decimal128, unserialize, arginfo_class_MongoDB_BSON_Decimal128_unserialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	ZEND_ME(MongoDB_BSON_Decimal128, __unserialize, arginfo_class_MongoDB_BSON_Decimal128___unserialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
	ZEND_ME(MongoDB_BSON_Decimal128, __serialize, arginfo_class_MongoDB_BSON_Decimal128___serialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
#if PHP_VERSION_ID >= 80000
	ZEND_ME(MongoDB_BSON_Decimal128, jsonSerialize, arginfo_class_MongoDB_BSON_Decimal128_jsonSerialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
#endif
#if !(PHP_VERSION_ID >= 80000)
	ZEND_ME(MongoDB_BSON_Decimal128, jsonSerialize, arginfo_class_MongoDB_BSON_Decimal128_jsonSerialize, ZEND_ACC_PUBLIC|ZEND_ACC_FINAL)
#endif
	ZEND_FE_END
};

static zend_class_entry *register_class_MongoDB_BSON_Decimal128(zend_class_entry *class_entry_MongoDB_BSON_Decimal128Interface, zend_class_entry *class_entry_JsonSerializable, zend_class_entry *class_entry_MongoDB_BSON_Type, zend_class_entry *class_entry_Serializable)
{
	zend_class_entry ce, *class_entry;

	INIT_NS_CLASS_ENTRY(ce, "MongoDB\\BSON", "Decimal128", class_MongoDB_BSON_Decimal128_methods);
	class_entry = zend_register_internal_class_ex(&ce, NULL);
	class_entry->ce_flags |= ZEND_ACC_FINAL;
	zend_class_implements(class_entry, 4, class_entry_MongoDB_BSON_Decimal128Interface, class_entry_JsonSerializable, class_entry_MongoDB_BSON_Type, class_entry_Serializable);

	return class_entry;
}
