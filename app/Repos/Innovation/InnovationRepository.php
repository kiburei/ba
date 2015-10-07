<?php namespace App\Repos\Innovation;


use App\Category;
use App\Innovation;
use App\User;


class InnovationRepository
{
    /**
     * The innovation model
     * @var
     */
    private $innovation;

    /**
     * The user model
     * @var
     */
    private $user;

    /**
     * The category model
     * @var
     */
    private $category;



    /**
     * @param Innovation $innovationModel
     * @param User $userModel
     * @param Category $categoryModel
     */

    public function __construct(Innovation $innovationModel, User $userModel, Category $categoryModel)
    {
        $this->innovation = $innovationModel;

        $this->user = $userModel;

        $this->category = $categoryModel;
    }


    /**
     * Commit an innovation for the auth user to the database
     * @param $request
     */
    public function persist($request)
    {
        \Auth::user()->innovation()->create([

            'innovationTitle'       => $request->innovationTitle,
            'innovationDescription' => $request->innovationDescription,
            'innovationFund'        => $request->innovationFund,
            'category_id'            => $request->innovationCategory,

        ]);
    }

    /**
     * Updates an innovation
     *
     * @param Innovation $innovation
     * @param array $details
     * @return Innovation
     */
    public function update(Innovation $innovation, Array $details)
    {
        $innovation->update($details);
        return $innovation;
    }


    /**
     * Deletes a specified innovation
     *
     * @param Innovation $innovation
     * @throws \Exception
     */
    public function delete(Innovation $innovation)
    {
        $innovation->delete();
    }


    /**
     * Retrieves a specific innovation
     *
     * @param $id
     */
    public function retrieve($id)
    {
        return Innovation::findOrFail($id);
    }


    /**
     * Retrieves all of a specific user's innovations
     *
     * @param User $user
     * @return mixed
     */
    public function innovationsForUser(User $user)
    {
        return $user->innovation()->with('category')->latest()->get();
    }


    /**
     * Returns the user who the innovation belongs to.
     *
     * @param Innovation $innovation
     * @return mixed
     */
    public function userForInnovation(Innovation $innovation)
    {
        return $innovation->user()->first();
    }


    /**
     * Returns all the innovations with the order latest to oldest
     *
     */
    public function allInnovations()
    {
        Innovation::all()->latest();
    }

    /**
     * Searches all innovations by their names.
     *
     * @param $query
     * @return mixed
     */
    public function searchAll($query)
    {
        return Innovation::where('name', 'LIKE', "%$query%")
            ->latest()
            ->get();
    }

    /**
     * Returns filtered results of a certain group.
     *
     * @param Category $category
     * @return mixed
     */
    public function innovationOfCategory(Category $category)
    {
        return Innovation::where('category', $category->id)
            ->latest()
            ->get();
    }
    /**
     * determines the format of searched innovations
     * @return mixed
     */
    public function getAll()
    {
        return Innovation::orderBy('created_at', 'desc')
            ->get();
    }

} 