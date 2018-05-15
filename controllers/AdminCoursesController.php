<?php


class AdminCoursesController extends AdminBase
{
    /**
     * Action для страницы "Управление курсами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
		$coursesList = Courses::getCoursesList(10);
        // Подключаем вид
		require_once(ROOT.'/views/admin/courses/index.php');
        return true;
    }    

    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        $categories = CategoryCourses::getCategoryCoursesListAdmin();

			// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['price'] = $_POST['price'];
            $options['timeline'] = $_POST['timeline'];
            $options['description'] = $_POST['description'];
            $options['status'] = $_POST['status'];

 			// Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Courses::createCourses($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/courses/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/courses");
            }
        }
        // Получаем список товаров
        // Подключаем вид
		require_once(ROOT.'/views/admin/courses/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $categories = CategoryCourses::getCategoryCoursesListAdmin();
        // Получаем данные о конкретном курсе
        $сoursesItem = Courses::getCoursesItemById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['price'] = $_POST['price'];
            $options['timeline'] = $_POST['timeline'];
            $options['description'] = $_POST['description'];
            $options['status'] = $_POST['status'];
            // Сохраняем изменения
            if (Courses::updateCoursesById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/courses/{$id}.jpg");
                }
            }
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/courses");
        }
        // Подключаем вид
		require_once(ROOT.'/views/admin/courses/update.php');
        return true;
    }


    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Courses::deleteCoursesById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/courses");
        }
        // Подключаем вид
		require_once(ROOT.'/views/admin/courses/delete.php');
        return true;
    }


        public function actionIndexCategory()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров
        $categoryList = CategoryCourses::getCategoryCoursesListAdmin();
        // Подключаем вид
        require_once(ROOT.'/views/admin/courses/category/index.php');
        return true;
    } 

public function actionUpdateCategory($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список категорий для выпадающего списка
        $categoryItem = CategoryCourses::getCategoryCoursesListAdminById($id);
        // Получаем данные о конкретном курсе
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];
            // Сохраняем изменения
            CategoryCourses::updateCategoryCoursesById($id, $options);
                
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/courses/category");
        }
        // Подключаем вид
        require_once(ROOT.'/views/admin/courses/category/update.php');
        return true;
    }

    public function actionCreateCategory()
    {
        // Проверка доступа
        self::checkAdmin();

            // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = CategoryCourses::createCategoryCourses($options);
                // Если запись добавлена

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/courses/category");
            }
        }
        // Получаем список товаров
        // Подключаем вид
        require_once(ROOT.'/views/admin/courses/category/create.php');
        return true;
    }

    public function actionDeleteСategory($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список товаров// Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            CategoryCourses::deleteCategoryCoursesById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/courses/category");
        }
        // Подключаем вид
        require_once(ROOT.'/views/admin/courses/category/delete.php');
        return true;
    }


}

?>